<?php

$token='5507390256:AAEKgvu4maBvPgsBPK9pQUm48VXyBlijoPE';
$chat_id='-1001693244363';
@session_start();
function send($message){
	global $token,$chat_id;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $chat_id .'&text='. urlencode($message) .'&parse_mode=HTML');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
	$result = curl_exec($curl);
	curl_close($curl);
	return true;
}
?>