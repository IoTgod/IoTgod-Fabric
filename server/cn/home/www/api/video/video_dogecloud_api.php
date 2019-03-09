<?php

include '../../functions.php';

header('Access-Control-Allow-Origin:*');

$vcode= $_REQUEST[vcode];
$ip= $_REQUEST[ip];

header('Content-type: text/json');

echo api__dogecloud("pch5",$vcode,$ip,$GLOBALS['dc_AccessKey'],$GLOBALS['dc_SecretKey']);