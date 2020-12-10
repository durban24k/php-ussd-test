<?php
     include_once './functions/register.php';

     $session=$_POST['sessionId'];
     $serviceCode=$_POST['serviceCode'];
     $phoneNumber=$_POST['phoneNumber'];
     $text=$_POST['text'];

     $txt=explode('*',$text);
     $arrayLen=0;
     $arrayLen=count($txt);

     if($text==""){
          $response="CON Welcome to Services:\n";
          $response.="1. Login\n";
          $response.="2. Setup Profile";
     }elseif($text=="1"){
          $response=regUser();
          // function to authenticate the secret code
     }elseif($text=="2"){
          // function to set up the profile
     }

     header('Content-type:text/plain');
     echo $response;

?>