<?php
header('Access-Control-Allow-Origin:*');


if(!isset($_REQUEST['k'])){
    header('Content-type: image/jpg');

    if($_REQUEST['i'] == "chino"){
        $id = mt_rand(1,112);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/chino/".$id.".jpg");
    }elseif($_REQUEST['i'] == "background"){
        $id = mt_rand(1,4);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/bc/".$id.".jpg");
    }else{
        $id = mt_rand(1,157);
        echo file_get_contents("https://yimian-image.obs.myhwclouds.com/acg/moe/".$id.".jpg");
    }
}else{

    if($_REQUEST['i'] == "chino"){
        $id = mt_rand(1,112);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/chino/".$id.".jpg");
    }elseif($_REQUEST['i'] == "background"){
        $id = mt_rand(1,4);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/bc/".$id.".jpg");
    }else{
        $id = mt_rand(1,157);
        header("Location: https://yimian-image.obs.myhwclouds.com/acg/moe/".$id.".jpg");
    }
}


die();