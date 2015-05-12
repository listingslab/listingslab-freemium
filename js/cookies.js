//////////////////////
//	Open Source JQuery
/*	Cookies */

function _cookies (){
// inits the cookie values and updates
	try {
		$.cookie.json = true;
		var cookie_test =  $.cookie(FREEmium ['cookie_domain']);
		if (cookie_test == null){
			FREEmium ['first_visit'] = true;
			var new_cookie = {};
			new_cookie ['random_str'] = _random_str (26);
			new_cookie ['num_visits'] = 1;
			new_cookie ['first_visit'] = Date.now();
			new_cookie ['last_visit'] = Date.now();
			//JSON.parse
			$.cookie(FREEmium ['cookie_domain'], JSON.stringify(new_cookie) , { path: '/' });
		}else{
			FREEmium ['first_visit'] = false;
			var cookie_message_title = 'Welcome back!';
			var cookie_message_text = '<br /><br />This is your x visit';
			//cookie_message_text += '<br /><br /><a href="?show=cookies" class="btn_cookies">Learn more about cookies</a>';
			//_show_message (cookie_message_title, cookie_message_text, 'icon');
			
			
			
			$('.btn_cookies').click (function (){
				try {
					//$.ionSound.play ('popup');
					$( "#cookies" ).dialog( "open" );
					return false;
				}catch (err){
					alert ('.btn_cookies Click Error' + err);
				}
				return true;
			});
		}
		
		var win_width = $( window ).width();
		var w = 750;
		if (win_width < 750){
			w = win_width - 50;
		}
		$( "#cookies" ).dialog ({
			width: w,
			modal: true,
			autoOpen: false,
			close: function( event, ui ) {
				//$.ionSound.play ('click_off');
			}
		});
		_css ($('#btn_cookies'), 'margin', '5px' );
		$('#btn_cookies').click (function (){
			$( "#cookies" ).dialog( "open" );
			//$.ionSound.play ('poppop');
			return false;
		});
		_btn ('#btn_delete_cookies', 'grip-diagonal-se', true);
		$('#btn_delete_cookies').click (function (){
			//$.removeCookie(FREEmium ['cookie_domain'], { path: '/' });
			//return true;
			alert ('btn_delete_cookies');
		});
		_btn ('#btn_close_dialog', 'circle-arrow-w', true);
		$('#btn_close_dialog').click (function (){
			//$.ionSound.play ('click_off');
			$( "#cookies" ).dialog( "close" );
			return false;
		});
		_btn ('.btn_optout_cookies', 'grip-diagonal-se', true);
		$('.btn_optout_cookies').click (function (){
			return true;
		});
	}catch (err){
		alert ('FREEmium model.js \n\n _cookies()\n\n'+err);
	}
}