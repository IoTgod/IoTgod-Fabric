<?php
include '../../../functions.php';
header('Access-Control-Allow-Origin:*');

header("Location: https://mail.yimian.xyz/?to=".$_REQUEST['to']."&subject=".$_REQUEST['subject']."&body=".$_REQUEST['body']."&from=".$_REQUEST['from']);


die();