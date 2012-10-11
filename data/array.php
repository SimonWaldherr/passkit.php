<?php

$primaryFields = new ArrayObject();
$primaryFields = array(array("key"     => "origin",
                             "label"   => "San Francisco",
                             "value"   => "SFO"),
                       array("key"     => "destination",
                             "label"   => "London",
                             "value"   => "LHR"));

$secondaryFields = new ArrayObject();
$secondaryFields = array(array("key"   => "gate",
                               "label" => "Gate",
                               "value" => "F12"),
                         array("key"   => "date",
                               "label" => "Departure date",
                               "value" => "07/11/2012 ".rand(0,23).':'.rand(0,59)));

$backFields = new ArrayObject();
$backFields = array(array("key"   => "passenger-name",
                          "label" => "Passenger",
                          "value" => "John Appleseed"));

$JSON = json_encode(array("passTypeIdentifier" => "pass.com.apple.demo", 
                          "formatVersion"      => 1,
                          "organizationName"   => "Apple Inc",
                          "serialNumber"       => "123456",
                          "teamIdentifier"     => "123ABCDEFG",
                          "backgroundColor"    => "rgb(107,156,196)",
                          "logoText"           => "Flight info",
                          "description"        => "passkit.php demo pass",
                          "boardingPass"       => array("primaryFields"   => $primaryFields,
                                                        "secondaryFields" => $secondaryFields,
                                                        "backFields"      => $backFields,
                                                        "transitType"     => "PKTransitTypeAir"),
                          "barcode"            => array("format"          => "PKBarcodeFormatQR",
                                                        "message"         => "Flight-GateF12-ID6643679AH7B",
                                                        "messageEncoding" => "utf-8")));

?>