<?php
include '../../../functions.php';

header('Access-Control-Allow-Origin:*');

$n_chino = 120;
$n_PCBackground = 92;
$n_PhoneBackground = 32;
$n_loli = 120;
$n_normal = 149;
$n_star = 10;
$n_head = 130;

$r = $_REQUEST['i'];

if(isset($_REQUEST['i'])) $r = $_REQUEST['i'];
else $r = rand_pic();

if($r == "background") $r = rand_bc();


if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    if($r == "chino"){
        $id = mt_rand(1,$n_chino);
        echo file_get_contents("https://image.yimian.xyz/acg/cmoe/".$id.".jpg");
    }elseif($r == "PCBackground"){
        $id = mt_rand(1,$n_PCBackground);
        echo file_get_contents("https://image.yimian.xyz/acg/hbc/".$id.".jpg");
    }elseif($r == "PhoneBackground"){
        $id = mt_rand(1,$n_PhoneBackground);
        echo file_get_contents("https://image.yimian.xyz/acg/sbc/".$id.".jpg");
    }elseif($r == "loli"){
        $id = mt_rand(1,$n_loli);
        echo file_get_contents("https://image.yimian.xyz/acg/fmoe/".$id.".jpg");
    }elseif($r == "normal"){
        $id = mt_rand(1,$n_normal);
        echo file_get_contents("https://image.yimian.xyz/acg/dmoe/".$id.".jpg");
    }elseif($r == "star"){
        $id = mt_rand(1,$n_star);
        echo file_get_contents("https://image.yimian.xyz/acg/star/".$id.".jpg");
    }elseif($r == "head"){
        $id = mt_rand(1,$n_head);
        echo file_get_contents("https://image.yimian.xyz/acg/head/".$id.".png");
    }else{
        $id = mt_rand(1,$n_normal);
        echo file_get_contents("https://image.yimian.xyz/acg/dmoe/".$id.".jpg");
    }
}else{

    if($r == "chino"){
        $id = mt_rand(1,$n_chino);
        header("Location: https://image.yimian.xyz/acg/cmoe/".$id.".jpg");
    }elseif($r == "PCBackground"){
        $id = mt_rand(1,$n_PCBackground);
        header("Location: https://image.yimian.xyz/acg/hbc/".$id.".jpg");
    }elseif($r == "PhoneBackground"){
        $id = mt_rand(1,$n_PhoneBackground);
        header("Location: https://image.yimian.xyz/acg/sbc/".$id.".jpg");
    }elseif($r == "loli"){
        $id = mt_rand(1,$n_loli);
        header("Location: https://image.yimian.xyz/acg/fmoe/".$id.".jpg");
    }elseif($r == "normal"){
        $id = mt_rand(1,$n_normal);
        header("Location: https://image.yimian.xyz/acg/dmoe/".$id.".jpg");
    }elseif($r == "star"){
        $id = mt_rand(1,$n_star);
        header("Location: https://image.yimian.xyz/acg/star/".$id.".jpg");
    }elseif($r == "head"){
        $id = mt_rand(1,$n_head);
        header("Location: https://image.yimian.xyz/acg/head/".$id.".png");
    }else{
        $id = mt_rand(1,$n_loli);
        header("Location: https://image.yimian.xyz/acg/fmoe/".$id.".jpg");
    }
}

yimian__log("log_api", array("api" => "moe", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $r."/".$id));

die();




function rand_pic(){

    $t = mt_rand(1,6);

    if($t < 2) return "chino";
    if($t < 5) return "normal";
    if($t < 6) return "loli";
    if($t < 7) return "star";
}

function rand_bc(){

    $t = mt_rand(1,10);

    if($t < 8) return "PCBackground";
    return "PhoneBackground";
}