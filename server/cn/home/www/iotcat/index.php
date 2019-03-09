<?php
include '../functions.php';

yimian__header("IoTcat","IoTcat,Yimian","IoTcat's first page.");

echo "<link href=https://cdn.yimian.ac.cn/hhCandy/style.css rel=stylesheet>";
echo "<script src=\"https://cdn.yimian.ac.cn/hhCandy/copy.js\"></script>";

yimian__headerEnd();

echo file_get_contents("../etc/hhCandy/index.html");

yimian__simpleFooter(1);