<?php
include_once 'keys.php';

$input='1*Alfred*Wanjau*0712345678*1*';

$explode_string=explode('*',$input);
$len=count($explode_string);
for($x=0;$x<$len;$x++){
     echo "$explode_string[$x] <br>";
}
echo $key;
?>