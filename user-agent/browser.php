<?php
if(!isset($_SERVER['HTTP_USER_AGENT'])){
    die('Bot detected by Elmar Aliyev');
}
echo $_SERVER['HTTP_USER_AGENT'];