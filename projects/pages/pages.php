<?php
$geti=htmlentities($_GET['p']);
if(!is_numeric($geti))die();
include "./pages/$geti.html";