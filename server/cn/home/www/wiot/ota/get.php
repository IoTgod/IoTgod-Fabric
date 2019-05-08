<?php
header('Access-Control-Allow-Origin:*'); 		
header('Content-type: text/plain; charset=utf8', true);




sendFile('./wiot.bin');



//	Function to send file to ESP8266
function sendFile($path) {
    header($_SERVER["SERVER_PROTOCOL"].' 200 OK', true, 200);
    header('Content-Type: application/octet-stream', true);
    header('Content-Disposition: attachment; filename='.basename($path));
    header('Content-Length: '.filesize($path), true);
    header('x-MD5: '.md5_file($path), true);
    readfile($path);
}



?>