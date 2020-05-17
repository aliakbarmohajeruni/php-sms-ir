<?php

include_once __DIR__. "/../vendor/autoload.php";

use App\SendMessage;

try {
	
	date_default_timezone_set("Asia/Tehran");

	$APIKey = "1";
	$SecretKey = "2";
	$LineNumber = "3";
	

	$MobileNumbers = array('09100000000');
	
	$Messages = array('test');
	
	@$SendDateTime = date("Y-m-d")."T".date("H:i:s");

	$SendMessage = new SendMessage($APIKey,$SecretKey,$LineNumber);
	$SendMessage = $SendMessage->SendMessage($MobileNumbers,$Messages,$SendDateTime);
	var_dump($SendMessage);
	
} catch (Exeption $e) {
	
	echo 'Error SendMessage : '.$e->getMessage();
	
}