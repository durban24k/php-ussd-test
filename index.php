<?php

// include_once 'functions.php';
$session=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text=$_POST['text'];

if($text==""){
     $response="CON What would you want to check \n";
     $response.="1. Account Info\n";
     $response.="2. Phone number";
}elseif($text=="1"){
     $response="CON Choose an option you want to view \n";
     $response.="1. Account No\n";
     $response.="2. Account Balance";
}elseif($text=="2"){
     $response="END Your phone number is ".$phoneNumber;
}elseif($text=="1*1"){
     $accNo="AC1101";
     $response="END Your account number is ".$accNO;
}elseif($text=="1*2"){
     $balance="KES 1.00";
     $response="END Your balance is ".$balance;
}

header('Content-type:text/plain');
echo $response;

?>