<?php 

require_once 'plivo.php';

$body = 'Welcome to Plivo I V R S. Press two to use SIP 2, or press three to use SIP 3';
$sip2 = $_REQUEST['sip2'];
$sip3 = $_REQUEST['sip3'];
$response = new Response();
$response->addSpeak($body);

//The below 'action' url can be customized. It acts as the base url in the other files
$getdigit = $response->addGetDigits(array('action' => 'http://ans_url.aws.af.cm/recieve_digits.php?sip2='.$sip2.'&'.'sip3='.$sip3));
$getdigit->addSpeak("Press Now");
header('Content-Type: text/xml');
echo($response->toXML());

?>   

