
function _admin_banner (){
// banner
	try {
		$('#use_banner_id').change(function(){
			if (this.checked){
				alert ('on');
			}else{
				alert ('off');
			}
		});
	}catch (err){
		alert ('FREEmium Admin  _admin_data Error\n\n'+err);
	}
}

function _admin_data (){
// admin_data
	try {
		ADMIN_data = [];
		ADMIN_data ['seconds_loaded'] = 0;
		ADMIN_data ['icon_url_old'] = $('#icon_url').val ();
		ADMIN_data ['icon_url'] = $('#icon_url').val ();
		ADMIN_data ['api_url'] = '/wp-content/themes/listingslab-freemium/php/json_api.php';
	}catch (err){
		alert ('FREEmium Admin  _admin_data Error\n\n'+err);
	}
}
function _display_message (title, text, clear){
// admin_data
	try {
		$('#admin_message_title').html (title);
		if (clear){
			$('#admin_message_text').html ( text );
		}else{
			$('#admin_message_text').prepend ( text + '<br />');
		}
	}catch (err){
		alert ('FREEmium Admin  _display_message Error\n\n'+err);
	}
}

function _save_data (){
// save_data
	try {
		var r = '?r=true';
		//link = '<a target="_blank" href="' + ADMIN_data ['api_url'] + r + '">TEST API</a>';
		_display_message ('SAVING', r, false);
		_CorsRequest (r, '_save_response');
		$('.admin_save').hide ();
	}catch (err){
		alert ('FREEmium Admin  _save_data Error\n\n'+err);
	}
}
function _save_response (r){
// save_replay
	try {
		_display_message ('RESPONSE', r, false);
	}catch (err){
		alert ('FREEmium Admin  _save_data Error\n\n'+err);
	}
}
function _admin_interval (){
// Happens every second
	try {
		var has_changes = false;
		ADMIN_data ['seconds_loaded'] ++;
		ADMIN_data ['icon_url'] = $('#icon_url').val ();
		if (ADMIN_data ['icon_url'] != ADMIN_data ['icon_url_old']){
			has_changes = true;
			$('#icon_edit img').attr('src', ADMIN_data ['icon_url']);
		}
		if (has_changes){
			$('.admin_save').fadeIn ();
		}else{
			$('.admin_save').fadeOut ();
		}
	}catch (err){
		alert ('FREEmium Admin  _admin_interval Error\n\n'+err);
	}
}
function _admin_style (){
// Styles the admin page
	try {
		$('.admin_section').addClass('ui-state- ui-corner-all');
		_css ($('.pad'), 'margin', '15px' );
		_css ($('.pad_ten'), 'padding', '15px' );
		
		_css ($('.admin_section'), 'margin-top', '25px' );
		_css ($('.admin_section'), 'margin-right', '25px' );
		
		_css ($('.admin_section'), 'background', 'white' );
		_css ($('.admin_section'), 'border', '1px solid #dbdbdb' );
		
		_css ($('#admin_message'), 'margin-top', '25px' );
		_css ($('#admin_message'), 'margin-right', '25px' );
		_css ($('#admin_message_title'), 'float', 'left' );
		_css ($('#admin_message_title'), 'margin-right', '5px' );
		_css ($('#admin_message_text'), 'float', 'left' );
		
		_css ($('#FREEmium_admin h1'), 'color', '#3da2cc' );
		_css ($('#FREEmium_admin h2'), 'color', '#3da2cc' );
		_css ($('#FREEmium_admin h3'), 'color', '#3da2cc' );
		
		_css ($('#FREEmium_admin h1'), 'font-weight', 'normal' );
		_css ($('#FREEmium_admin h2'), 'font-weight', 'normal' );
		_css ($('#FREEmium_admin h3'), 'font-weight', 'normal' );
		
		_css ($('#FREEmium_admin h1'), 'margin', '20px' );
		_css ($('#FREEmium_admin h2'), 'margin', '20px' );
		_css ($('#FREEmium_admin h3'), 'margin', '20px' );
		
		_css ($('#FREEmium_admin h1'), 'margin-left', '0px' );
		_css ($('#FREEmium_admin h2'), 'margin-left', '0px' );
		_css ($('#FREEmium_admin h3'), 'margin-left', '0px' );
		
		_css ($('#icon_instructions'), 'padding-top', '10px' );
		
		
	}catch (err){
		alert ('FREEmium Admin  _admin_style Error\n\n'+err);
	}
}
function _admin_icon (){
// Handles the MicroSite Icon functionality
	try {
		_css ($('#admin_icon_img'), 'float', 'right' );
		_css ($('#admin_icon_img'), 'max-height', '150px' );
		_css ($('#admin_icon_img'), 'margin-left', '25px' );
		
		$('#icon_edit').click(function() {
			try {
				alert ('EDIT');
			}catch (err){
				alert ('#btn_related_pages Click Error' + err);
			}
		 	return false;
		});
		$('#admin_icon_revert').click(function() {
			try {
				//alert ('REVERT');
			}catch (err){
				alert ('#btn_related_pages Click Error' + err);
			}
		 	return true;
		});
		$('#admin_icon_save').click(function() {
			try {
				_save_data ();
			}catch (err){
				alert ('#btn_related_pages Click Error' + err);
			}
		 	return false;
		});
	}catch (err){
		alert ('FREEmium Admin  __admin_icon () Error\n\n'+err);
	}
}
function _template_func (){
// Describes what the function does
	try {
		alert ('Describes what the function does');
	}catch (err){
		alert ('FREEmium Admin  _template_func Error\n\n'+err);
	}
}

$(document).ready(function () {
	try {
		console.log ('________________________\n\nWelcome to FREEmium admin.js');

		_admin_data ();
		_admin_icon ();
		_admin_style ();
		_admin_banner ();
		admin_interval = setInterval(_admin_interval, 1000);
		_admin_interval ();
		
		setTimeout(function(){
			try {
				_css ($('#FREEmium_admin'), 'visibility', 'visible');
			}catch (err){
				alert ('ERROR FREEmium __Main.js\n' + err);	
			}
		},500);
	}catch (err){
		alert ('FREEmium Admin ERROR Document NOT ready \n' + err);	
	}
});
