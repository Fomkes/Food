$(document).ready(function loaded() {
    $('body').addClass('domloaded');
    $('.kostamaster284').html('<span>© Copyright 2021 «KFC» LLC. <br>All Rights Reserved. <br>6+</span>');
    $('body').removeClass('ovh');
    $('.mst1').removeClass('mst1_vis');
    $('.promo_active .kostamaster015').val('KFC50');
    $('.bt_enter_code').click();
});
$('a[href*="#"]').on('click', function (e) {
    $('html,body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 1
    }, 700);
    e.preventDefault();
});
$('.kostamaster050').hover(function () {
    $(this).find('._1S_Sc-40').toggleClass('info_visible');
});
jQuery(function ($) {
    $(document).click(function (e) {
        var div = $("._1S_Sc-40 .info_visible, .kostamaster050");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            div.removeClass('info_visible');
        }
    });
});
$(document).ready(function () {
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
		centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 9000,
			disableOnInteraction: false,
        },
        paginationClickable: true,
    })
});
$(document).ready(function () {
    var $btns = $('.products-tabs__tab').click(function () {
        if (this.id == 'all_filter') {
            $('.mst .kostamaster042').fadeIn(500);
        } else {
            var $el = $('.' + this.id).fadeIn(500);
            $('.mst .kostamaster042').not($el).hide();
        }
        $btns.removeClass('active_filter_button');
        $(this).addClass('active_filter_button');
    })
});
$('.sb1').click(function () {
    $('.vrl').addClass('hid');
});
$('.sws').click(function () {
    $('.smt').addClass('vis_flex');
    $('body').addClass('ovhmob');
});
$(function () {
    if(geci) {
        document.SityArr = geci;
    }
    else {
        document.SityArr = [{
            name: "Riyadh",
            class: "city_name"
        }, {
            name: "Mecca",
            class: "city_name"
        }, {
            name: "Dammam",
            class: "city_name"
        }, {
            name: "Abha",
            class: "city_name"
        }, {
            name: "Medina",
            class: "city_name"
        }, {
            name: "Jizan",
            class: "city_name"
        }, {
            name: "Buraida",
            class: "city_name"
        }];
    }
   
    searchSity();
    $("#inpunSearchSity").bind('keyup', searchSity);
});

function searchSity() {
    var strValForSearch = $("#inpunSearchSity").val().toLowerCase();
    var tempArr = document.SityArr;
    var arrResult = [];
    if (strValForSearch.length == 0) {
        arrResult = tempArr;
    } else {
        var lenStrSearch = strValForSearch.length;
        for (var i = 0; i < tempArr.length; i++) {
            var curEl = tempArr[i].name.toLowerCase();
            if (curEl.substr(0, lenStrSearch) == strValForSearch) {
                arrResult.push(tempArr[i]);
            }
        }
    }
    var countForOneCol = arrResult.length;
    for (var i = 1; i < 3; i++) {
        $("#colSity" + i).html("");
    }
    for (var i = 0; i < arrResult.length; i++) {
        $("#colSity" + (Math.floor(i / countForOneCol) + 1)).append('<div class="kostamaster031 ' + arrResult[i].class + '"><div class="kostamaster028 _25Rk9-40"><div class="kostamaster007"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"> <path fill="currentColor" d="M7.4 8.39L4.9 6.58 3.5 8.15l4.2 3.35 4.8-5.67-1.64-1.33z"></path></svg></div><span class="ctname">' + arrResult[i].name + '</span></div></div>');
    }
}

function mtl() {
    setInterval(function () {
        $('.mst1').removeClass('mst1_vis');
        $('body').removeClass('ovh');
    }, 2350);
};
$('body').on('click', '.city_name', function () {
    // var city_Val = $(this).find('.ctname').html();
    var city_Val = 'ua';
    $('.smt').removeClass('vis_flex');
    $('body').removeClass('ovhmob');
    // $('.main_city').html(city_Val);
    $('.mst1').addClass('mst1_vis');
    $('body').addClass('ovh');
    mtl();
    toLocalCity();
});
$('.mcc').click(function () {
    $('.vrl').addClass('hid');
    $('.smt').toggleClass('vis_flex');
    $('body').toggleClass('ovhmob');
});
$('.bd').click(function () {
    toLocalCity();
});
jQuery(function ($) {
    $(document).click(function (e) {
        var lov = $(".smt.vis_flex, .mcc, .sws");
        if (!lov.is(e.target) && lov.has(e.target).length === 0) {
            lov.removeClass('vis_flex');
            $('body').removeClass('ovhmob');
        }
    });
});

function toLocalCity() {
    var city = $('.main_city').html();
    localStorage.setItem('city', city);
}
const stickyNavbar = () => {
    const navbar = document.querySelector('#navbar');
    const banner = document.querySelector('#sldr');
    const content = document.querySelector('#menu-items');
    let pos = banner.getBoundingClientRect();
    if (pos.bottom < 0) {
        $(navbar).addClass('sticky');
    }
    if (pos.bottom > 0) {
        $(navbar).removeClass('sticky');
    }
}
window.addEventListener("scroll", stickyNavbar);
$('.GTChE-40').click(function () {
    $(this).siblings('.GTChE-40').removeClass('_2lMjP-40');
    $(this).addClass('_2lMjP-40');
});
$('._1koWR-40 div:nth-child(2)').click(function () {
    $(this).siblings('.sizebg').css('transform', 'translateX(0%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(3)').click(function () {
    $(this).siblings('.sizebg').css('transform', 'translateX(100%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(4)').click(function () {
    $(this).siblings('.sizebg').css('transform', 'translateX(200%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(5)').click(function () {
    $(this).siblings('.sizebg').css('transform', 'translateX(300%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});

function initButtonsAttrs() {
    $('.ProductCard__button').attr('data-sb-product-name', productName);

    function productName(index, attributeValue) {
        var pureNames = $(this).parents('._9VPg6-40').find('._2G24_-40').html();
        var namesWithoutLastSpaces = pureNames.trim();
        return (namesWithoutLastSpaces);
    }
    $('.ProductCard__button').attr('data-sb-product-price', productPrice);

    function productPrice(index, attributeValue) {
        var stroke = $(this).parents('._9VPg6-40').find('.kostamaster180').html();
        var withoutSpaces = stroke.replace(/\s/g, '');
        return (withoutSpaces);
    }
    $('.sizeitem').attr('data-sb-curent-size', productCurentSize);

    function productCurentSize(index, attributeValue) {
        var curSizeStroke = $(this).html();
        var curSizeName = $(this).parents('._9VPg6-40').find('._1koWR-40 div:nth-child(2)').text().replace(/[^ "a-zA-Z]/g, '');
        var curSizeStrokeWithoutSpaces = curSizeStroke.replace(/[^.\d]+/g, "").replace(/^([^\.]*\.)|\./g, 'SAR1');
        var curSizeDigit = curSizeStrokeWithoutSpaces;
        var curSizeDigitStroke = String(curSizeDigit);
        var curSizeFull = (curSizeDigitStroke + curSizeName);
        return (curSizeFull);
    }
    $('.ProductCard__button').attr('data-sb-product-size', productSize);

    function productSize(index, attributeValue) {
        if (!$(this).parents('._9VPg6-40').find('._1koWR-40').length == 0) {
            return ($(this).parents('._9VPg6-40').find('._1koWR-40 div:nth-child(2)').html());
        }
    }
    $('.ProductCard__button').attr('data-sb-product-img', productImg);

    function productImg(index, attributeValue) {
        var attri = $(this).parents('._9VPg6-40').find('.kostamaster016 img').attr('centersrc');
        if (typeof attri !== typeof undefined && attri !== false) {
            var relativeLink = $(this).parents('._9VPg6-40').find('.kostamaster016 img').attr('centersrc');
            return (relativeLink);
        } else {
            var relativeLink = $(this).parents('._9VPg6-40').find('.kostamaster016 img').attr('src');
            return (relativeLink);
        }
    }
    $('.ProductCard__button').attr('data-sb-product-quantity', productQuantity);

    function productQuantity(index, attributeValue) {
        return ('1');
    }
    $('.ProductCard__button').attr('data-sb-id-or-vendor-code', productId);

    function productId(index, attributeValue) {
        return ('00000' + (index + 1));
    }
    $('._1koWR-40').find('div:not(:nth-child(1)):not(:nth-child(2))').attr('data-sb-curent-id-or-vendor-code', productCurrentId);

    function productCurrentId(index, attributeValue) {
        return ('sz000s' + (index + 1));
    }
    $('._1koWR-40').find('div:nth-child(2)').attr('data-sb-curent-id-or-vendor-code', productCurrentIdFirst);

    function productCurrentIdFirst(index, attributeValue) {
        var productCurrentIdFirstItem = $(this).parents('.Card__footer').find('.ProductCard__button').attr('data-sb-id-or-vendor-code');
        return (productCurrentIdFirstItem);
    }
}
initButtonsAttrs();
$('._11QpV-40').click(function () {
    $('.SEOText').addClass('_2PMo3-40');
    $(this).hide();
    $('.mtrack').attr('style', 'height: auto; overflow: visible;')
});
$(document).ready(function () {
    function scrltp1() {
        var basketHeight1 = $('.smart-basket__form').height();
        var wrapperHeight1 = $('.smart-basket__wrapper').height();
        if (basketHeight1 > wrapperHeight1) {
            $('#blockscroll').addClass('ts1');
            $('#blockscroll').animate({
                scrollTop: $(".smart-basket__result-common").offset().top
            }, 900);
        } else {
            $('#blockscroll').removeClass('ts1');
        }
    }
    scrltp1();
});
$('.more_info').click(function () {
    $(this).toggleClass('questions__item_opened').siblings('.kostamaster052').toggleClass('openeditem');
});
$('.kostamaster067').click(function () {
    $('.click_platform').click();
});
$('.kostamaster284').html('<span>© Copyright 2012 — 2021 «KFC» LLC. <br>All Rights Reserved. <br>6+</span>');