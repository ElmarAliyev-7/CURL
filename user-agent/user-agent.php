<?php

$ch = curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL => 'http://localhost/middle-php/curl/user-agent/browser.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT']
]);

$soruce = curl_exec($ch);
curl_close($ch);

echo $soruce;