<?php
header('Access-Control-Allow-Origin:*');

include '../functions.php';

$to = $_REQUEST['to'];
$tpl = $_REQUEST['tpl'];
$msg1 = $_REQUEST['msg1'];
$msg2 = $_REQUEST['msg2'];
$msg3 = $_REQUEST['msg3'];


yimian__sms($to, $tpl, $msg1, $msg2, $msg3);

