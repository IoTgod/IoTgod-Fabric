<?php
include '../functions.php';

header("Access-Control-Allow-Origin: *");

$fp=$_REQUEST['fp'];

echo json_encode(array("t1"=>"11","t2"=>"ee","t"=>time()));