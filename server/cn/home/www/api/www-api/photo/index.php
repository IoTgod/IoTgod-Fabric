<?php
include '../../../functions.php';
header('Access-Control-Allow-Origin:*');


if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    if($_REQUEST['i'] == "middleSchoolGraduate"){
        $id = mt_rand(1,100);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/photo/middleSchoolGraduate/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "mountTai2014"){
        $id = mt_rand(1,40);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/photo/mountTai2014/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "songshanShaolin2011"){
        $id = mt_rand(1,500);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/photo/songshanShaolin2011/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "tsingzhuTaishan2014"){
        $id = mt_rand(1,318);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/photo/tsingzhuTaishan2014/".$id.".jpeg");
    }
}else{

    if($_REQUEST['i'] == "middleSchoolGraduate"){
        $id = mt_rand(1,100);
        header("Location: https://yimian-image.obs.myhwclouds.com/photo/middleSchoolGraduate/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "mountTai2014"){
        $id = mt_rand(1,40);
        header("Location: https://yimian-image.obs.myhwclouds.com/photo/mountTai2014/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "songshanShaolin2011"){
        $id = mt_rand(1,500);
        header("Location: https://yimian-image.obs.myhwclouds.com/photo/songshanShaolin2011/".$id.".jpeg");
    }elseif($_REQUEST['i'] == "tsingzhuTaishan2014"){
        $id = mt_rand(1,318);
        header("Location: https://yimian-image.obs.myhwclouds.com/photo/tsingzhuTaishan2014/".$id.".jpeg");
    }
}


yimian__log("log_api", array("api" => "photo", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $_REQUEST['i']."/".$id));


die();