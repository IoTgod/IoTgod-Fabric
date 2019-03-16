<?php
include '../functions.php';

if(!isset($_COOKIE['fp'])) yimian__setFp();


$fp = $_COOKIE['fp'];

$usr = db__getUsrInfo($fp);

if($usr == null){

    echo "<script>window.location.href='https://login.yimian.xyz?from=https://vpn.yimian.xyz'</script>";
    die();
}


echo "<script>window.location.href='./ssr_key.php'</script>";



die();
