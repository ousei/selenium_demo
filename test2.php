<?php
// An example of using php-webdriver.

require_once('lib/__init__.php');

// launching with GhostDriver

// remote host
//$host='http://162.243.175.134:8080';

//host launched on local machine
$host='http://127.0.0.1:8080';


$desired_capabilities =  DesiredCapabilities::phantomjs();
$driver = RemoteWebDriver::create($this->host,$desired_capabilities,5000);
$driver->get('http://www.google.com');

// this way you're able to get page source
echo $driver->getPageSource();  


?>