<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/middle-php/curl/post/form.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => ['name' => 'Elmar Aliyev', 'age'=> 20, 'submit' => 1]
]);

$data = curl_exec($ch);
curl_close($ch);

echo $data;