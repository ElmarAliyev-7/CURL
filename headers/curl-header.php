<?php
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/middle-php/curl/headers/header.php',
    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_HTTPHEADER => [
//        'Token: elmaraliyev'
//    ],
    CURLOPT_HEADER => true,
    CURLOPT_NOBODY => true
]);

$source = curl_exec($ch);
curl_close($ch);

echo $source;