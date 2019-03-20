<?php
include '../../../functions.php';
header('Access-Control-Allow-Origin:*');

$n_draw = 473;
$n_city = 569;
$n_animal = 454;
$n_universe = 89;
$n_church = 47;
$n_pic = 2171;
$n_europe = 24;
$n_sea = 19;
$n_material = 2138;
$n_green = 180;
$n_nature = 295;
$n_road = 49;


if(isset($_REQUEST['i'])) $r = $_REQUEST['i'];


if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    if($r == "draw"){
        $id = mt_rand(1,$n_draw);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E5%90%8D%E7%94%BB/".$id.".jpg");
    }elseif($r == "city"){
        $id = mt_rand(1,$n_city);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E5%9F%8E%E5%B8%82/".$id.".jpg");
    }elseif($r == "animal"){
        $id = mt_rand(1,$n_animal);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E5%8A%A8%E7%89%A9/".$id.".jpg");
    }elseif($r == "universe"){
        $id = mt_rand(1,$n_universe);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E5%AE%87%E5%AE%99/".$id.".jpg");
    }elseif($r == "church"){
        $id = mt_rand(1,$n_church);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E6%95%99%E5%A0%82/".$id.".jpg");
    }elseif($r == "europe"){
        $id = mt_rand(1,$n_europe);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E6%AC%A7%E5%BC%8F%E9%A3%8E%E5%85%89/".$id.".jpg");
    }elseif($r == "sea"){
        $id = mt_rand(1,$n_sea);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E6%B5%B7%E8%BE%B9/".$id.".jpg");
    }elseif($r == "material"){
        $id = mt_rand(1,$n_material);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E7%B4%A0%E6%9D%90/".$id.".jpg");
    }elseif($r == "green"){
        $id = mt_rand(1,$n_green);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E7%BB%BF%E8%89%B2/".$id.".jpg");
    }elseif($r == "nature"){
        $id = mt_rand(1,$n_nature);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E8%87%AA%E7%84%B6/".$id.".jpg");
    }elseif($r == "road"){
        $id = mt_rand(1,$n_road);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E8%B7%AF/".$id.".jpg");
    }else{
        $id = mt_rand(1,$n_pic);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/pic/%E5%A3%81%E7%BA%B8/".$id.".jpg");
    }
}else{

    if($r == "draw"){
        $id = mt_rand(1,$n_draw);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E5%90%8D%E7%94%BB/".$id.".jpg");
    }elseif($r == "city"){
        $id = mt_rand(1,$n_city);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E5%9F%8E%E5%B8%82/".$id.".jpg");
    }elseif($r == "animal"){
        $id = mt_rand(1,$n_animal);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E5%8A%A8%E7%89%A9/".$id.".jpg");
    }elseif($r == "universe"){
        $id = mt_rand(1,$n_universe);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E5%AE%87%E5%AE%99/".$id.".jpg");
    }elseif($r == "church"){
        $id = mt_rand(1,$n_church);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E6%95%99%E5%A0%82/".$id.".jpg");
    }elseif($r == "europe"){
        $id = mt_rand(1,$n_europe);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E6%AC%A7%E5%BC%8F%E9%A3%8E%E5%85%89/".$id.".jpg");
    }elseif($r == "sea"){
        $id = mt_rand(1,$n_sea);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E6%B5%B7%E8%BE%B9/".$id.".jpg");
    }elseif($r == "material"){
        $id = mt_rand(1,$n_material);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E7%B4%A0%E6%9D%90/".$id.".jpg");
    }elseif($r == "green"){
        $id = mt_rand(1,$n_green);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E7%BB%BF%E8%89%B2/".$id.".jpg");
    }elseif($r == "nature"){
        $id = mt_rand(1,$n_nature);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E8%87%AA%E7%84%B6/".$id.".jpg");
    }elseif($r == "road"){
        $id = mt_rand(1,$n_road);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E8%B7%AF/".$id.".jpg");
    }else{
        $id = mt_rand(1,$n_pic);
        header("Location: https://yimian-image.obs.myhwclouds.com/pic/%E5%A3%81%E7%BA%B8/".$id.".jpg");
    }
}

yimian__log("log_api", array("api" => "pic", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $r."/".$id));

die();

