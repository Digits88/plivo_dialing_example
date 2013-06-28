<?php
require_once 'plivo.php';
$to_number = $_POST['sip1'];
$auth_id = "XXXXXXXXXXXXXXXXXXXXXX";
$auth_token = "XXXXXXXXXXXXXXXXXXX";

$p = new RestAPI($auth_id, $auth_token);

$params = array(
		'to' => $to_number,	
		'from' => '919741892323',
		'answer_url' => 'http://ans_url.aws.af.cm?sip2='.$_POST['sip2'].'&'.'sip3='.$_POST['sip3'],
		);

$response = $p->make_call($params);
echo $response;
?>		
