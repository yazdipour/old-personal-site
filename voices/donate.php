<?php
$fn='nr_of_donate_clicks.txt';
$hits = file($fn);
$fp = fopen($fn, "w");
fputs($fp , ++$hits[0]);
fclose($fp);

header('Location: https://www.payping.ir/yazdipour');

