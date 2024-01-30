<?php
include 'config.php';
$webh = "https://github.com/Jasurbek4455/phpbot/blob/275134bd0bee6eeb9d8a5ec9bd312627e838cdcb/index.php";
$api = "https://api.telegram.org/bot{$token}/setWebhook?url={$webh}";
$res = file_get_contents($api);
echo $res;
