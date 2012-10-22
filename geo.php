<?php

if(($_GET['lat'] != '')&&($_GET['long'] != ''))
  {
    require('./passkit.php');

    $Certificates = array('AppleWWDRCA'  => './certs/AppleWWDRCA.pem', 
                         'Certificate'  => './certs/Certificate.p12', 
                         'CertPassword' => 'THE PASSWORD FOR YOUR CERTIFICATE');
    
    $ImageFiles = array('images/icon.png', 'images/icon@2x.png', 'images/logo.png');
    
    include('./data/event.php');
    
    $TempPath = '/pages/home/htdocs/temp/';
    
    echoPass(createPass($Certificates, $ImageFiles, $JSON, 'passtest', $TempPath));
    
    m_uwait(12500);
    die();
  }

?><html>
<head>
  <meta charset="utf-8">
  <meta content="width=220, initial-scale=1.3" name="viewport">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>passkit.php demo</title>
  <style>
    body{
      width: 220px;
      margin: 30px auto;
    }
    form, input, select{
      display: block;
      font-size: 16px;
      margin: 25px auto 25px auto;
      width: 220px;
    }
    input, select{
      width: 220px;
    }
    h1{
      width: 185px;
      font-family: "Hoefler Text", Constantia, Palatino, Georgia, serif;
      margin: auto;
    }
    #repo{
      font-family: "Lucida Grande", "Lucida Sans Unicode", Geneva, sans-serif;
      font-size: 7pt;
      color: #444;
    }
  </style>
</head>
<body>
  <h1>passkit.php</h1>
  <p>this is a passkit.php demo with geo information</p>
  <p><a onclick="get_location();">insert your current location</a></p>
  <form action="./geo.php" method="get">
    <label for="lat">latitude</label><input name="lat" id="lat" type="text">
    <label for="long">longitude</label><input name="long" id="long" type="text">
    <input style="display:none;" name="time" id="time" type="text" value="<?php echo time(); ?>">
    <input type="submit" value="Generate Passbook Pass">
  </form>
  <p id="repo">the source of this software ist available at <a href="http://github.com/">GitHub</a> in the <a href="https://github.com/SimonWaldherr/passkit.php">github.com/SimonWaldherr/passkit.php repository</a>.</p>
  <script type="text/javascript">
    function get_location() {
    navigator.geolocation.getCurrentPosition(insertLocation);
    }
    
    function insertLocation(position) {
    document.getElementById('lat').value = position.coords.latitude;
    document.getElementById('long').value = position.coords.longitude;
    }

    
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12565471-1']);
    _gaq.push(['_setDomainName', 'waldherr.eu']);
    _gaq.push(['_trackPageview']);
    
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>
</html>
