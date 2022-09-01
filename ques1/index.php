<?php
require "EncodedecodeClass.php";
 
$obj = new EncodedecodeClass();
$res =  $obj->customEncode("Developer");
echo "<h4>Ques1:- Write a PHP class to encode and decode any string. Please don't use any predefined PHP functions e.g. base64_encode, bin2hex etc</h4>";
echo "<h4>Ans1:- </h4><h4>After encode=  ".$res."</h4>";
echo "<h4>After decode=  ".$obj->customDecode($res)."</h4>";
?>