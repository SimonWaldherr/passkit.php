#passkit.php
##a php function to create passes for Apple Passbook

[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/)
[![Flattr donate button](https://raw.github.com/balupton/flattr-buttons/master/badge-89x18.gif)](https://flattr.com/submit/auto?user_id=SimonWaldherr&url=http%3A%2F%2Fgithub.com%2FSimonWaldherr%2Fpasskit.php "Donate monthly to this project using Flattr")
[![PayPal donate button](https://img.shields.io/badge/donate%20via-paypal-blue.svg)](https://www.paypal.me/SimonWaldherr "Donate to this project via PayPal.me")  

###Info material

* [Passbook Programming Guide](https://developer.apple.com/library/prerelease/ios/#documentation/UserExperience/Conceptual/PassKit_PG/)
* [Downloads from developer.apple.com](https://developer.apple.com/downloads/index.action?name=Passbook)
* [developer.apple.com Provisioning Portal](https://developer.apple.com/ios/manage/passtypeids/ios/manage)

###Requirements

* Clientside
	* iOS > 6.0.0
	* Mac OS X > 10.8.0
* Serverside
	* PHP 5 >= 5.2.2
	* Access to filesystem
* Other
	* [iOS Developer Account](https://developer.apple.com/devcenter/ios/index.action) (99$/Year)

###Tested with

* Clienthardware
	* iPhone 4
	* iPhone 4s
	* iPhone 5s
	* iPod Touch (4.Gen.)
	* iMac
	* MBP
* Clientsoftware
	* iOS 6.x
	* iOS 7.0
	* iOS 7.0.3
	* iOS 7.1
	* Mac OS X 10.8
	* Mac OS X 10.9
* Serversoftware
	* Linux (RHEL 5)
	* Linux (Debian 7)
	* Solaris (11.1)
	* Apache 2
	* PHP 5.3.13
	* PHP 5.4.4
	* PHP 5.5.5

###License

The MIT License  
Copyright © 2014 Simon Waldherr  

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
