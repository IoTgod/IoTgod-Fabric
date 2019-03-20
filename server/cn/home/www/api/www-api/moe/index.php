<?php
include '../../../functions.php';

header('Access-Control-Allow-Origin:*');

$n_chino = 120;
$n_PCBackground = 92;
$n_PhoneBackground = 32;
$n_loli = 120;
$n_normal = 149;
$n_star = 10;


$r = $_REQUEST['i'];

if(isset($_REQUEST['i'])) $r = $_REQUEST['i'];
else $r = rand_pic();

if($r == "background") $r = rand_bc();


if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    if($r == "chino"){
        $id = mt_rand(1,$n_chino);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/cmoe/".$id.".jpg");
    }elseif($r == "PCBackground"){
        $id = mt_rand(1,$n_PCBackground);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/hbc/".$id.".jpg");
    }elseif($r == "PhoneBackground"){
        $id = mt_rand(1,$n_PhoneBackground);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/sbc/".$id.".jpg");
    }elseif($r == "loli"){
        $id = mt_rand(1,$n_loli);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/fmoe/".$id.".jpg");
    }elseif($r == "normal"){
        $id = mt_rand(1,$n_normal);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/dmoe/".$id.".jpg");
    }elseif($r == "star"){
        $id = mt_rand(1,$n_star);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/star/".$id.".jpg");
    }else{
        $id = mt_rand(1,$n_normal);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/dmoe/".$id.".jpg");
    }
}else{

    if($r == "chino"){
        $id = mt_rand(1,$n_chino);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/cmoe/".$id.".jpg");
    }elseif($r == "PCBackground"){
        $id = mt_rand(1,$n_PCBackground);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/hbc/".$id.".jpg");
    }elseif($r == "PhoneBackground"){
        $id = mt_rand(1,$n_PhoneBackground);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/sbc/".$id.".jpg");
    }elseif($r == "loli"){
        $id = mt_rand(1,$n_loli);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/fmoe/".$id.".jpg");
    }elseif($r == "normal"){
        $id = mt_rand(1,$n_normal);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/dmoe/".$id.".jpg");
    }elseif($r == "star"){
        $id = mt_rand(1,$n_star);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/star/".$id.".jpg");
    }else{
        $id = mt_rand(1,$n_loli);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/fmoe/".$id.".jpg");
    }
}


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