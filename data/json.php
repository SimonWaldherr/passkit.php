<?php

$JSON = '{
  "backgroundColor": "rgb(107,156,196)",
  "barcode": {
    "format": "PKBarcodeFormatQR",
    "message": "Flight-GateF12-ID6643679AH7B",
    "messageEncoding": "utf-8"
  },
  "boardingPass": {
    "backFields": [
      {
        "key": "passenger-name",
        "label": "Passenger",
        "value": "John Appleseed"
      }
    ],
    "primaryFields": [
      {
        "key": "origin",
        "label": "San Francisco",
        "value": "SFO"
      },
      {
        "key": "destination",
        "label": "London",
        "value": "LHR"
      }
    ],
    "secondaryFields": [
      {
        "key": "gate",
        "label": "Gate",
        "value": "F12"
      },
      {
        "key": "date",
        "label": "Departure date",
        "value": "07/11/2012 '.rand(0,23).':'.rand(0,59).'"
      }
    ],
    "transitType": "PKTransitTypeAir"
  },
  "description": "passkit.php demo pass",
  "formatVersion": 1,
  "logoText": "Flight info",
  "organizationName": "Apple Inc",
  "passTypeIdentifier": "pass.com.apple.demo",
  "serialNumber": "123456",
  "teamIdentifier": "123ABCDEFG"
}';

?>