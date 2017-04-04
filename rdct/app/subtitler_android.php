<?php
$fname='subtitler_visitCount.txt';
$hits = file($fname);
$fp = fopen($fname, "w");
fputs($fp , ++$hits[0]);
fclose($fp);


header('Location: http://shahriar.in/rdct/app/subtitler_android_ver1.apk');