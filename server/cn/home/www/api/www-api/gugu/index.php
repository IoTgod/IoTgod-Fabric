<?php
include '../../../functions.php';
header('Access-Control-Allow-Origin:*');

$body = $_REQUEST['body'];
$ak = $_REQUEST['ak'];
$userID = $_REQUEST['userID'];
$memobirdID = $_REQUEST['memobirdID'];

$res = gugu__send($ak, $userID, $memobirdID, $body);

$data = json_decode($res);
if(!isset($data['showapi_res_code'])){

    echo json_encode(array("showapi_res_code" => 0, "showapi_res_error" => "ak, 咕咕号或咕咕机编号错误!"));
}else{

    echo $res;
}

yimian__log("log_gugu", array("timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "body" => $body, "who" => $userID));

yimian__log("log_api", array("api" => "gugu", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $userID.": ".$body));


die();