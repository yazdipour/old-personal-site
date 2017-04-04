<?php
include '../projects/contents.php';
$index=[4,7,10,11,12];
$arr1=array();
foreach ($index as $v) {
	$key = array_search($v, array_column($arr, 'id'));
	$arr1[]=$arr[$key];
}
$arr1=array_reverse($arr1);
////
$arr2=[["Instagram Pro for Edge",'extension',7]];
////
$str = file_get_contents('./voters.json');
$json = json_decode($str, true);

$arr3=[["Jadi.net for Win10","Win10 Application to browse in Jadi Blog and podcasts"],
["DotNetTips.info for Win10","Win10 Application for .NetTips (full feature please!)"]];

?>