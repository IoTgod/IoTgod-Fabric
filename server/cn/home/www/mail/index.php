<?php

include '../functions.php';


echo json_encode(array("state" => yimian__mail($_REQUEST['to'], $_REQUEST['subject'], $_REQUEST['body'], $_REQUEST['from'])));

yimian__log("log_api", array("api" => "mail", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => $_REQUEST['subject']));

die();