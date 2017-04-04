<?php
$name=htmlentities($_POST['id']);
$str = file_get_contents('./voters.json');
$json = json_decode($str, true);
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
if(!isset($json[$name])||!in_array($ip,$json[$name])){
	$json[$name][]=$ip;
	$fp = fopen('./voters.json', 'w');
	fwrite($fp, json_encode($json));
	fclose($fp);
	echo 11;
}