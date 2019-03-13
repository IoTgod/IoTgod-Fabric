<?php
include '../functions.php';

header("Access-Control-Allow-Origin: *");

$fp=$_REQUEST['fp'];

$res = db__getData(db__connect(),"fp_cookie","fp",$fp);

$arr = array();

$cookie = $res[0]['cookie'];

echo json_encode(array("cookie" => $cookie, "t" => time(), "tt" => $res[0]['timestamp']));