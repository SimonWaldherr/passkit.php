#passkit.php
##a php function to create passes for Apple Passbook

###Info material

* [Passbook Programming Guide](https://developer.apple.com/library/prerelease/ios/#documentation/UserExperience/Conceptual/PassKit_PG/)
* [Downloads from developer.apple.com](https://developer.apple.com/downloads/index.action?name=Passbook)
* [developer.apple.com Provisioning Portal](https://developer.apple.com/ios/manage/passtypeids/ios/manage)

###Requirements

* Clientside
	* iOS 6.0
	* Mac OS X 10.8
* Serverside
	* PHP 5 >= 5.2.2
	* Access to filesystem
	* iOS Developer Account

###Tested with

* Clienthardware
	* iPhone 4
	* iPhone 4s
	* iPod Touch (4.Gen.)
	* iMac
	* MBP
* Clientsoftware
	* iOS 6.0
	* Mac OS X 10.8
* Serversoftware
	* Linux (RHEL 5)
	* Apache 2
	* PHP 5.3.13

###Example

[cdn.simon.waldherr.eu/projects/passkit.php/](http://cdn.simon.waldherr.eu/projects/passkit.php/)  

scan this QR-Code with your iPhone to open the passkit.php example  
<img src="http://cdn.simon.waldherr.eu/projects/passkit.php/example.png" alt="cdn.simon.waldherr.eu/projects/passkit.php/"/>  

you also can "test" a few of the [example passes](https://github.com/SimonWaldherr/passkit.php/tree/master/passes) generated with passkit.php

###License

The MIT License  
Copyright © 2012 Simon Waldherr  

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

###Version

passkit.php v1.0

###Howto

In order to get it working on your server, you have to:
* replace the dummy ```Certificate.p12``` with your own cert
* change the teamIdentifier in ```/data/XYZ.json``` to your own
* change the passTypeIdentifier in ```/data/XYZ.json``` to your own
* select a temp directory in ```index.php```
* upload to your server
* change permissions of your temp dir ```chmod```

more details coming soon ...   

###Questions

feel free to ask via:

* GitHub ([via Issues](https://github.com/SimonWaldherr/passkit.php/issues))
* contact form ([on my page](http://simon.waldherr.eu/))
* [eMail](mailto:contact@simonwaldherr.de)
* Twitter [@SimonWaldherr](http://twitter.com/simonwaldherr)
