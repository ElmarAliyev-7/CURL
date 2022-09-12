<?php
//datalari cekdiyimiz url
$url = 'https://www.php.net';

//curl basladiriq
$ch = curl_init();

//curl settings
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
]);

//curl ise saliriq
$source = curl_exec($ch);

//curl sonlandiririq
curl_close($ch);

function get_html_title($soruce){
    preg_match("/\<title.*\>(.*)\<\/title\>/isU", $soruce, $matches);
    return $matches[1];
}

echo get_html_title($source);