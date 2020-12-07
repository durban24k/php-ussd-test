<?php

// include_once 'functions.php';
$session=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text=$_POST['text'];

$textArray=explode('*',$text);
$arrayLen=0;
$arrayLen=count($textArray);

if($text==""){
     $response="CON Welcome to TeleHealth Services:\n";
     $response.="1. Login\n";
     $response.="2. Setup Profile";
}elseif($text=="1"){
     $response="CON Enter Your Secret Code:\n";
     // function to authenticate the secret code
}elseif($text=="2"){
     // function to set up the profile
}

header('Content-type:text/plain');
echo $response;

?>