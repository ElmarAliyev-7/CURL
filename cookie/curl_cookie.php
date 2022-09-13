<?php

//$ch = curl_init();
//curl_setopt_array($ch, [
//    CURLOPT_URL => 'http://localhost/middle-php/curl/cookie/cookie.php',
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_COOKIE => 'test=Elmar Aliyev'
//]);
//$source = curl_exec($ch);
//curl_close($ch);

//echo $source;

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/middle-php/curl/cookie/login_example/index.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'username' => 'admin',
        'password' => '1234',
        'submit'   => 1
    ],
    CURLOPT_COOKIEJAR => __DIR__ .'.txt'
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;


$ch_2 = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/middle-php/curl/cookie/login_example/index.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'haqqimda' => 'curl isledi',
    ],
    CURLOPT_COOKIEFILE => 'cookie.txt'
]);
$source_2 = curl_exec($ch);
curl_close($ch);

echo $source_2;