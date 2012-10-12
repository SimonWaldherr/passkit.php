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
                  './data/small.php',
                  './data/coupon.json',
                  './data/event.json',
                  './data/small.json',
                  './data/generic.json');
    
    if(!is_numeric($_POST['aexample']))
      {
        $example_data = rand(0,6);
      }
    else
      {
        $example_data = $_POST['aexample'];
      }
    
    
    if($example_data < 3)
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
  <p>select a example and press the submit button to generate a pass</p>
  <form action="./" method="post">
    <select id="aexample" name="aexample" size="7">
      <option value="false" selected="selected">random</option>
      <option value="0">array (php)</option>
      <option value="1">json (php)</option>
      <option value="2">small (php)</option>
      <option value="3">coupon (json)</option>
      <option value="4">event (json)</option>
      <option value="5">small (json)</option>
      <option value="6">generic (json)</option>
    </select>
    <input style="display:none;" name="time" id="time" type="text" value="<?php echo time(); ?>">
    <input type="submit" value="Generate Passbook Pass">
  </form>
  <p id="repo">the source of this software ist available at <a href="http://github.com/">GitHub</a> in the <a href="https://github.com/SimonWaldherr/passkit.php">github.com/SimonWaldherr/passkit.php repository</a>.</p>
  <script type='text/javascript'>

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12565471-1']);
    _gaq.push(['_setDomainName', 'waldherr.eu']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = 'http://statistik.simon.waldherr.eu/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>
</html>
