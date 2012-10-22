<?php

$latitude = $_GET['lat'];
$longitude = $_GET['long'];
$webServiceURL = 'https://ssl-id.de/cdn.simon.waldherr.eu/projects/passkit.php/geo.php?lat='.$latitude.'&long='.$longitude.'&update=';

if(!is_numeric($longitude)||!is_numeric($$latitude))
  {
    die();
  }

$JSON = '{
  "authenticationToken": "vxwxd7J8AlNNFPS8k0a0FfUFtq0ewzFdc",
  "backgroundColor": "rgb(60, 65, 76)",
  "barcode": {
    "format": "PKBarcodeFormatPDF417",
    "message": "http://simonwaldherr.github.com/passkit.php/",
    "messageEncoding": "iso-8859-1"
  },
  "description": "The Beat Goes On",
  "eventTicket": {
    "backFields": [
      {
        "key": "terms",
        "label": "TERMS AND CONDITIONS",
        "value": "Lorem Ipsum dolar sit amet. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum."
      }
    ],
    "primaryFields": [
      {
        "key": "event",
        "label": "EVENT",
        "value": "The Beat Goes On"
      }
    ],
    "secondaryFields": [
      {
        "key": "loc",
        "label": "LOCATION",
        "value": "Moscone West"
      }
    ]
  },
  "foregroundColor": "rgb(255, 255, 255)",
  "formatVersion": 1,
  "locations": [
    {
      "latitude": '.$latitude.',
      "longitude": '.$longitude.'
    }
  ],
  "logoText": "passkit.php",
  "organizationName": "Apple Inc.",
  "passTypeIdentifier": "pass.com.apple.demo",
  "serialNumber": "123456",
  "teamIdentifier": "123ABCDEFG",
  "webServiceURL": "'.$webServiceURL.'"
}';

?>