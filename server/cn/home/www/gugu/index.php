<?php
include '../functions.php';

$body = "Nothing!";

if(isset($_REQUEST['body'])) $body = $_REQUEST['body'];

echo yimian__gugu($body);

yimian__log("log_gugu", array("timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "body" => $body, "who" => "yimian"));

yimian__log("log_api", array("api" => "gugu", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(get_ip()), "_from" => get_from(), "content" => "yimian: ".$body));