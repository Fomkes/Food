<?php
include("config.php");
$ip = getUserIP();

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'https') . '://' . $_SERVER['HTTP_HOST'] . '/';
$getQuery = array(
    "url" => $root . basename(__DIR__) . '/webhook.php',
);

foreach (CHATS as $chat) {
    $url = "https://api.telegram.org/bot". $chat['token'] ."/setWebhook?" . http_build_query($getQuery) . '&allowed_updates=["message","callback_query"]';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    
    $resultQuery = curl_exec($ch);
    curl_close($ch);
    
    echo $resultQuery . '\n';
}

?>