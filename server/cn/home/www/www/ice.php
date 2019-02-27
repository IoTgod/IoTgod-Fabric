<?php

//header('Content-Type:application/json');//json announced
header('Access-Control-Allow-Origin:*');//allow crossdomain visit


/*
$usr=$_GET['usr'];
$pswd=$_GET['pswd'];
$url=base64_encode($_GET['url']);

*/

$url="https://ice.xjtlu.edu.cn/login/index.php";
$curlPost="anchor=&logintoken=HyfsXFsVSTTAbWnWP24KuohuN07tBKyq&username=yimian.liu17&password=lymian%240904%40112";

	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, TRUE);

    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1 );

    echo curl_exec($ch);
	curl_close($ch);