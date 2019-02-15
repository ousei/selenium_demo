<?PHP
require_once( 'vendor/autoload.php' );

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverBy;
 
use JonnyW\PhantomJs\Client;
 
$client = Client::getInstance();
$client->getEngine()->setPath('vendor/bin/phantomjs');


$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();
 
$request->setMethod('GET');
$request->setUrl('https://news.yahoo.co.jp/');
 
$client->send($request, $response);
 
echo "request url: " . $request->getUrl() . "\n";
echo "response: " . $response->getStatus() . "\n";

/*
$driver->findElement(
  WebDriverBy::cssSelector('#epTabTop > ul.topics > li:nth-child(3) a')
)->click();

$driver->findElement(
  WebDriverBy::cssSelector('#main > div.mainBox > div.topicsDetail > div.headline > div.headlineTxt > a')
)->click();

$title = "";
if ($driver->findElement(WebDriverBy::cssSelector('#ym_newsarticle h1'))) {
  $title = $driver->findElement(WebDriverBy::cssSelector('#ym_newsarticle h1'))->getAttribute('innerHTML');
}
*/


if($response->getStatus() === 200) {
    echo "content: \n";
    echo $response->getContent();
}
?>