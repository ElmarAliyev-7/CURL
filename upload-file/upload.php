<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/middle-php/curl/upload-file/form.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => ['fullname' => 'Elmar Aliyev',
        'cv' => new CURLFile('cv.txt', 'text/plain'),
        'submit' => 1
    ],
]);

$data = curl_exec($ch);

curl_close($ch);
echo $data;