<?php

function PEM2DER($signature)
  {
    $signature = substr($signature, (strpos($signature, 'filename="smime.p7s"')+20));
    return base64_decode(trim(substr($signature, 0, strpos($signature, '------'))));
  }

function createPass($Certificates, $ImageFiles, $JSON, $PassName = 'pass', $TempPath = './temp/', $Debug = false)
  {
    //define pathes
    $UniquePassId  = time().hash("CRC32", $_SERVER["REMOTE_ADDR"].$_SERVER["HTTP_USER_AGENT"]);
    $ManifestPath  = $TempPath.$UniquePassId.'/manifest.json';
    $SignaturePath = $TempPath.$UniquePassId.'/signature';
    $PKPassPath    = $TempPath.$UniquePassId.'/'.$PassName.'.pkpass';
    
    //create temp dir
    mkdir($TempPath.$UniquePassId, 0777, true);
    
    //generate SHA1 hashes
    $FileHashes['pass.json'] = hash("SHA1", $JSON);
    foreach($ImageFiles as $ImagePath)
      {
        $ImageName = basename($ImagePath);
        $FileHashes[strtolower($ImageName)] = hash("SHA1", file_get_contents($ImagePath));
      }
    
    //save hashes as json in temp file
    $Manifest = json_encode($FileHashes);
    file_put_contents($ManifestPath, $Manifest);
    
    //load .p12 certificate
    $PKCS12 = file_get_contents($Certificates['Certificate']);
    $certs = array();
    if(openssl_pkcs12_read($PKCS12, $certs, $Certificates['CertPassword']) == true)
      {
        $certdata = openssl_x509_read($certs['cert']);
        $privkey = openssl_pkey_get_private($certs['pkey'], $Certificates['CertPassword']);
      }
    
    //sign file hashes with AppleWWDRCA certificate
    openssl_pkcs7_sign($ManifestPath, $SignaturePath, $certdata, $privkey, array(), PKCS7_BINARY | PKCS7_DETACHED, $Certificates['AppleWWDRCA']);
    $ManifestSignature = file_get_contents($SignaturePath);
    $ManifestSignatureDER = PEM2DER($ManifestSignature);
    
    //put files (and strings as files) in a zip archive
    $ZIP = new ZipArchive();
    $ZIP->open($PKPassPath, ZIPARCHIVE::CREATE);
    $ZIP->addFromString('signature', $ManifestSignatureDER);
    $ZIP->addFromString('manifest.json', $Manifest);
    $ZIP->addFromString('pass.json', $JSON);
    foreach($ImageFiles as $ImagePath)
      {
        $ImageName = basename($ImagePath);
        $ZIP->addFile($ImagePath, $ImageName);
      }
    $ZIP->close();
    
    //load pass data und delete temp files (if debug mode is off)
    $Pass['data'] = file_get_contents($PKPassPath);
    $Pass['size'] = filesize($PKPassPath);
    $Pass['name'] = $PassName;
    if(!$Debug)
      {
        unlink($TempPath.$UniquePassId.'/manifest.json');
        unlink($TempPath.$UniquePassId.'/'.$PassName.'.pkpass');
        unlink($TempPath.$UniquePassId.'/signature');
        rmdir($TempPath.$UniquePassId);
      }
    
    return $Pass;
  }

function echoPass($Pass)
  {
    //send http headers and zip archive content to client
    header('Pragma: no-cache');
    header('Content-type: application/vnd.apple.pkpass');
    header('Content-length: '.$Pass['size']);
    header('Content-Disposition: attachment; filename="'.$Pass['name'].'.pkpass"');
    echo $Pass['data'];
  }

?>
