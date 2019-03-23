<?php
include '../../../../functions.php';

header('Access-Control-Allow-Origin:*');

$n_head = 130;

/*
if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    $id = mt_rand(1,$n_head);
    echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/head/".$id.".png");

}else{
*/
    $id = mt_rand(1,$n_head);
    header("Location: https://yimian-image.obs.myhwclouds.com/acg/head/".$id.".png");

//}

yimian__log("log_api", array("api" => "moe", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => "head/".$id));

die();
