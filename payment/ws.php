#!/usr/bin/php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';
use Workerman\Worker;
include('config.php');

$users = [];

$context = array(
    'ssl' => array(
        'local_cert'  => SSR_CERT,
        'local_pk'    => SSL_KEY,
        'verify_peer' => false,
    )
);

$ws_worker = new Worker("websocket://".DOMEN.":".WSS_PORT, $context);
$ws_worker->transport = 'ssl';
$ws_worker->name = DOMEN;

$ws_worker->onWorkerStart = function() use (&$users)
{
    // Приём сообщений с webhook.php
    $inner_tcp_worker = new Worker("tcp://".DOMEN.":".TCP_PORT);
    $inner_tcp_worker->onMessage = function($connection, $data) use (&$users) {
        $data = json_decode($data, true);
        $callback_id = $data['callback_id'];
        $chat = $data['chat'];
        
        // Если соединение отсутсвует
        if (!isset($users[$data['session']])) {
            message_status("❌𝐎𝐅𝐅𝐋𝐈𝐍𝐄❌", $callback_id, $chat['token']);
            return;
        }
        
        // Если чек онлайна
        if ($data['status'] == 'online') {
            message_status("💚𝐎𝐍𝐋𝐈𝐍𝐄💚", $callback_id, $chat['token']);
            return;
        }
        
        // Если отправлено сообщение пользователю
        $con = $users[$data['session']];
        $con->send($data['status']);
        
        message_status("💸 𝐒𝐄𝐍𝐃 𝐁𝐑𝐎 🕯️", $callback_id, $chat['token']);
    };
    $inner_tcp_worker->listen();
};

// Запись сессии клиента
$ws_worker->onWebSocketConnect = function($connection) use (&$users)
{
    if (isset($_COOKIE['session'])) {
        $users[$_COOKIE['session']] = $connection;
    }
};

// Приём сообщений от клиента
$ws_worker->onMessage = function ($connection, $data) use ($ws_worker, &$users){};

// Удаление сессии
$ws_worker->onClose = function($connection) use (&$users)
{
    $user = array_search($connection, $users);
    if ( $user != false ) {
        unset($users[$user]);
    }
};

require_once __DIR__ . '/vendor/composer/init.php';
InitWorker();
Worker::runAll();