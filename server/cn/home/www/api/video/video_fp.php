<?php

include '../../functions.php';

header('Access-Control-Allow-Origin:*');

$id= $_REQUEST[id];
$fp= $_REQUEST[fp];
$seek= $_REQUEST[seek];
$ip= $_REQUEST[ip];

$conn=db__connect();

if(!db__rowNum($conn,"fp","fp",$fp)) 
db__pushData($conn,"fp",array("fp"=>$fp,"videoseek"=>$seek,"video"=>$id,"ip"=>$ip,"videotime"=>time()));
else
db__pushData($conn,"fp",array("fp"=>$fp,"videoseek"=>$seek,"video"=>$id,"ip"=>$ip,"videotime"=>time()),array("fp"=>$fp));


yimian__log("log_video",array("ip"=>ip2long($ip),"fp"=>$fp,"seek"=>$seek,"vid"=>$id,"timestamp"=>date('Y-m-d H:i:s', time())),array("fp"=>$fp,"vid"=>$id));

header('Content-type: text/json');

die();