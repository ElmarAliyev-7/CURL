<?php

$file = fopen('php_net.txt', 'w+');
$img  = fopen('image.png','w+');

$ch = curl_init();
curl_setopt_array($ch, [
//    CURLOPT_URL => 'https://www.php.net/',
    CURLOPT_URL => 'https://backend.eduaz.com/storage/uploads/teachers/1652170990.jpg',
    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_FILE => $file
    CURLOPT_FILE => $img
]);
curl_exec($ch);
curl_close($ch);
