<?php 
//Recieves digits from index.php action
require_once 'plivo.php';
$digits = $_REQUEST['Digits'];
	
$r = new Response();

$sip2 = $_REQUEST['sip2'];
$sip3 = $_REQUEST['sip3'];

if ($digits == '2'){
  $r->addSpeak("You pressed 2");
  $d = $r->addDial(array("callerId" => $sip2));
  $d->addUser($sip2);
} 
	
elseif ($digits == '3'){
  $r->addSpeak("You pressed 3");
  $d = $r->addDial(array());
  $d->addUser($sip3);
} 

else {
  $r->addSpeak("You pressed wrong");
}
("Content-Type: text/xml");
echo($r->toXML());
?>		
