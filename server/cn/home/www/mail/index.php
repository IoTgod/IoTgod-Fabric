<?php

include '../functions.php';


echo json_encode(array("state" => yimian__mail($_REQUEST['to'], $_REQUEST['subject'], $_REQUEST['body'], $_REQUEST['fromName'])));

