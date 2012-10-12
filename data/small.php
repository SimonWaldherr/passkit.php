<?php

$PassStyleArray = array('boardingPass','coupon','eventTicket','generic','storeCard');
$PassStyle = $PassStyleArray[rand(0,4)];

$JSON = '{
  "authenticationToken": "vxwxd7J8AlNNFPS8k0a0FfUFtq0ewzFdc",
  "backgroundColor": "rgb('.rand(0,200).', '.rand(0,200).', '.rand(0,200).')",
  "barcode": {
    "format": "PKBarcodeFormatQR",
    "message": "'.hash("SHA256", time().rand(0,2000000000)).'",
    "messageEncoding": "iso-8859-1"
  },
  "description": "Random '.$PassStyle.' Demo Pass",
  "foregroundColor": "rgb(251, 251, 251)",
  "formatVersion": 1,
  "'.$PassStyle.'": {
    "primaryFields": [
      {
        "key": "number",
        "value": "'.rand(0,100000).'"
      }
    ]
  },
  "logoText": "passkit.php",
  "organizationName": "Apple Inc",
  "passTypeIdentifier": "pass.com.apple.demo",
  "serialNumber": "8j23fm3",
  "teamIdentifier": "123ABCDEFG"
}';

?>