<?php
include '../../../functions.php';
header('Access-Control-Allow-Origin:*');


$res = db__getData(db__connect("yulu"), "yulu", "wid", mt_rand(1,42));

echo json_encode(array("s" => $res[0]['words']));

yimian__log("log_api", array("api" => "words", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $res[0]['words']));


die();