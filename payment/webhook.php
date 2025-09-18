<?php
include("config.php");

// Обработка данных с телеги
$data = file_get_contents('php://input');
if (isset($data)){
    
    // Декодим данные
    $data = json_decode($data, true);
    
    // Получаем коллбэк и id сообщения
    $callback    = $data["callback_query"]["data"];
    $message_id  = $data["callback_query"]["message"]["message_id"];
    $callback_id = $data["callback_query"]["id"];
    $chat_id     = $data["callback_query"]["message"]["chat"]["id"];
    
    foreach (CHATS as $chat) {
        if ($chat['cards'] == $chat_id) {
            break;
        }
    }
    
    // Получаем статус и сессию, декодим их в json
    $data = explode('_', $callback);
    $session = $data[1];
    $status = $data[0];
    $data = json_encode([
        'session'     => $session, 
        'status'      => $status,
        'callback_id' => $callback_id,
        'chat'        => $chat,
    ]);
    
    // if ($status == 'ban') {
    //     $ips = file_get_contents('../.htaccess');
    //     $ips += 
    // }
    
    // Отправляем данные в вебсокет
    $localsocket = 'tcp://'.DOMEN.':'.TCP_PORT;
    $instance = stream_socket_client($localsocket);
    fwrite($instance, $data);
    fclose($instance);
}
?>