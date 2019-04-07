<?php
include '../functions.php';

header("Access-Control-Allow-Origin: *");

$fp = $_REQUEST['fp'];
$type = $_REQUEST['type'];
$value = $_REQUEST['value'];

yimian__log("log_search", array("fp" => $fp, "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "type" => $type, "value" => $value));