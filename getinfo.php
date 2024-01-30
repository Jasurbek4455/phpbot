<?php
$data = file_get_contents("php://input");
$logf = "webhookdata.json";
$log = fopen($logf, "a");
fwrite($log, $data);
fclose($log);
