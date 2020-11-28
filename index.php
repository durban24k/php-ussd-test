<?php

// // include_once 'functions.php';
// $session=$_POST['sessionId'];
// $serviceCode=$_POST['serviceCode'];
// $phoneNumber=$_POST['phoneNumber'];
// $text=$_POST['text'];

// $textArray=explode('*',$text);
// $arrayLen=count($textArray);

// if($text==""){
//      $response="CON Welcome to TeleHealth Services:\n";
//      $response.="1. Login\n";
//      $response.="2. Setup Profile";
// }elseif($text=="1"){
//      $response="CON Enter Your Secret Code:\n";
// }

// header('Content-type:text/plain');
// echo $response;

#We obtain the data which is contained in the post url on our server.

$text=$_GET['USSD_STRING'];
$phonenumber=$_GET['MSISDN'];
$serviceCode=$_GET['serviceCode'];


$level = explode("*", $text);
if (isset($text)) {
     if ($text=="") {
     $response="CON Welcome to the registration portal.\nPlease enter you full name";
     }
     if(isset($level[0]) && $level[0]!="" && !isset($level[1])){
          $response="CON Hi ".$level[0].", enter your ward name";   
     }
     else if(isset($level[1]) && $level[1]!="" && !isset($level[2])){
          $response="CON Please enter you national ID number\n";
     }
     else if(isset($level[2]) && $level[2]!="" && !isset($level[3])){
     //Save data to database
          $data=array(
               'phonenumber'=>$phonenumber,
               'fullname' =>$level[0],
               'electoral_ward' => $level[1],
               'national_id'=>$level[2]
               );
          $response="END Thank you ".$level[0]." for registering.\nWe will keep you updated"; 
     }
}
header('Content-type: text/plain');
echo $response;


?>