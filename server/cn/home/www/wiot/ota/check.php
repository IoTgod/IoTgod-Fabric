<?php 
include '../../functions.php';

header('Access-Control-Allow-Origin:*');

$version = $_REQUEST['version'];
$mac = $_REQUEST['MAC'];

if(isset($version)){
    if($version != "v0.1.4")
        echo json_encode(array("update" => 1));
    else
        echo json_encode(array('update' => 0));

yimian__log("log_wiot", array("timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "version" => $version /* 经md5不可逆加密，仅用于区分用户 */, "mac" => $mac));

    die();
}

echo "This Page is only for wIoT OTA!!";