<?php
        #We obtain the data which is contained in the post url on our server.

     $text=$_POST['USSD_STRING'];
     $phonenumber=$_POST['MSISDN'];
     $serviceCode=$_POST['serviceCode'];

     $level = explode("*", $text);
     if ($text=="") {
          $response="CON Welcome to the registration portal.\nPlease enter you full name";
     }else{
          $response="END Confirm that this is your information\n";
          $response.="Name:".$level[0]."\n";
          $response.="Phone Number:".$phoneNumber;
     }

     header('Content-type: text/plain');
     echo $response;



?>