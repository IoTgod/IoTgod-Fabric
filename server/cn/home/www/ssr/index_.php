<?php
include '../functions.php';

$fp = $_COOKIE['fp'];

$usr = db__getUsrInfo($fp);

if($usr == null){

    echo "<script>window.location.href='https://login.yimian.xyz'</script>";
    die();
}


echo "<script>window.location.href='./ssr_key.php'</script>";



die();
