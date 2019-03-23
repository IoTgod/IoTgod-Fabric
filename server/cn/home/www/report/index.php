<?php
include '../functions.php';

$conn = db__connect("log");

$report = "";

$report .= date("Y年m月d日 站点综合报告\n");

$report .= "\n---------------------------\n";

$report .= "\nAPI调用情况\n\n";

$res_api = db__getData($conn, "log_api");

$api_ip = array();
$api_moe = 0;
$api_pic = 0;
$api_words = 0;
$api_mail = 0;
$api_gugu = 0;


foreach($res_api as $row){

    if(strtotime($row['timestamp']) > time() - 3600 * 24){

        if(!in_array(long2ip($row['ip']), $api_ip)) array_push($api_ip, long2ip($row['ip']));

        if($row['api'] == "moe") $api_moe++;
        elseif($row['api'] == "pic") $api_pic++;
        elseif($row['api'] == "words") $api_words++;
        elseif($row['api'] == "mail") $api_mail++;
        elseif($row['api'] == "gugu") $api_gugu++;
    }
}

$report .= "访问人数：".count($api_ip)."\n";
$report .= "总访问次数：".($api_moe + $api_pic + $api_words + $api_mail + $api_gugu)."\n\n";

$report .= "访问者：";

foreach($api_ip as $ip){

    $report .= $ip.", ";
}

$report .= "\n\n";

$report .= "moe访问次数： ".$api_moe."次\npic访问次数： ".$api_pic."次\nwords访问次数： ".$api_words."次\nmail访问次数： ".$api_mail."次\ngugu访问次数： ".$api_gugu."次\n\n";

$report .= "------------------------";


curl__post("https://gugu.yimian.xyz", array("body" => $report));


die();