<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://elmartest.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$source = curl_exec($ch);

if($source == false){
    echo curl_error($ch);
}
curl_close($ch);

echo $source;