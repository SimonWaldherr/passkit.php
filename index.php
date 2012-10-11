<?php

if($_POST['time'] != '')
  {
    require('./passkit.php');

    $Certificates = array('AppleWWDRCA'  => './certs/AppleWWDRCA.pem', 
                         'Certificate'  => './certs/Certificate.p12', 
                         'CertPassword' => 'THE PASSWORD FOR YOUR CERTIFICATE');
    
    $ImageFiles = array('images/icon.png', 'images/icon@2x.png', 'images/logo.png');
    
    $data = array('./data/array.php',
                  './data/json.php',
                  './data/coupon.json',
                  './data/event.json',
                  './data/small.json',
                  './data/generic.json');
    
    if(!is_numeric($_POST['aexample']))
      {
        $example_data = rand(0,5);
      }
    else
      {
        $example_data = $_POST['aexample'];
      }
    
    
    if($example_data < 2)
      {
        include($data[$example_data]);
      }
    else
      {
        $JSON = file_get_contents($data[$example_data]);
      }
    
    
    $TempPath = '/pages/home/htdocs/temp/';
    
    echoPass(createPass($Certificates, $ImageFiles, $JSON, 'passtest', $TempPath));
    
    m_uwait(12500);
    die();
  }

?><html>
<head>
  <meta charset="utf-8">
  <meta content="width=220px, initial-scale=1.3" name="viewport">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>passkit.php demo</title>
  <style>
    form, input, select{
      display: block;
      font-size: 16px;
      margin: 25px auto 25px auto;
      width: 220px;
    }
    input, select{
      width: 220px;
    }
  </style>
  
</head>
<body>
  
  <form action="./" method="post">
    <select id="aexample" name="aexample" size="6">
      <option value="false" selected="selected">random</option>
      <option value="0">array</option>
      <option value="1">json</option>
      <option value="2">coupon</option>
      <option value="3">event</option>
      <option value="4">small</option>
      <option value="5">generic</option>
    </select>
    <input style="display:none;" name="time" id="time" type="text" value="<?php echo time(); ?>">
    <input type="submit" value="Generate Passbook Pass">
  </form>
  
</body>
</html>
