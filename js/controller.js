//////////////////////////////////////
//	Open Source Listingslab ECMAScript
/* Controller (MVC) */
function _controller (){
	try {
		_buttons ();
		_laptop ();
		_related_pages ();
	}catch (err){
		alert ('FREEmium _controller ()\n\n'+err);
	}
}
function _buttons (){
// Handles button functionality
	try {
		_btn ('.shortcode_blog_btn', 'seek-next', true);
		_css ($('.shortcode_blog_btn'), 'margin-top', '15px' );
		$('.shortcode_blog_btn').click (function (){
			try {
			}catch (err){
				alert ('.shortcode_blog_btn Click Error' + err);
			}
			return true;
		});
		_btn ('.display-posts_link', 'seek-next', true);
		$('#btn_related_pages').click (function (){
			try {
				_toggle_related_pages ();
			}catch (err){
				alert ('#btn_related_pages Click Error' + err);
			}
			return false;
		});
		var win_width = $( window ).width();
		var w = 750;
		if (win_width < 750){
			w = win_width - 50;
		}
		$( "#nav_search" ).dialog ({
			width: w,
			modal: true,
			autoOpen: false,
			close: function( event, ui ) {
				//$.ionSound.play ('click_off');
			}
		});
		
		_css ($('#btn_search'), 'margin', '5px' );
		$('#btn_search').click (function (){
			try {
				//$.ionSound.play ('poppop');
				$( "#nav_search" ).dialog( "open" );
			}catch (err){
				alert ('#btn_search Click Error' + err);
			}
			return false;
		});
		
		//_btn ('.list-link', 'seek-next', true);
		$('.list-link').click (function (){
			try {
				//$.ionSound.play ('_click_on');
			}catch (err){
				alert ('#btn_show_related Click Error' + err);
			}
			return true;
		});
	}catch (err){
		alert ('ERROR FREEmium _buttons Error\n\n'+err);
	}
}
function _toggle_related_pages (){
// Handles related pages toggleing
	try {
		
		if (FREEmium ['toggles']['related_pages'] =='off'){
			//$.ionSound.play ('toggle');
			$('#related_pages').fadeIn ();
			FREEmium ['toggles']['related_pages'] = 'on';
			$('#related_button img').attr('src',FREEmium ['theme_path'] + 'img/png/system/less.png');
		}else{
			//$.ionSound.play ('toggle');
			$('#related_pages').fadeOut ();
			FREEmium ['toggles']['related_pages'] = 'off';
			$('#related_button img').attr('src',FREEmium ['theme_path'] + 'img/png/system/more.png');
		}
	}catch (err){
		alert ('ERROR FREEmium _toggle_related_pages Error\n\n'+err);
	}
}
function _related_pages (){
// Handles related pages button functionality
	try {
		
		_css ($('.list-pages-shortcode li'), 'list-style', 'none' );
		_css ($('#up'), 'float', 'left' );
		$('#related_pages').hide ();
		$('#related_button').click (function (){
			try {
				_toggle_related_pages ();		
			}catch (err){
				alert ('#btn_show_related Click Error' + err);
			}
			return false;
		});
		
		
		_btn ('.list-pages-shortcode a', 'seek-next', true);
		$('.list-pages-shortcode a').click (function (){
			try {
				//$.ionSound.play ('click_on');
			}catch (err){
				alert ('#btn_show_related Click Error' + err);
			}
			return true;
		});
	}catch (err){
		alert ('ERROR FREEmium _related_pages Error\n\n'+err);
	}
}
function _laptop (){
// Handles the popup admin menu functionality
	try {
		_btn ('.laptop_menu', 'gear', true);
		
		_btn ('.post-edit-link', 'pencil', true);
		$('.post-edit-link').click (function (){
			try {
				//$.ionSound.play ('click_on');	
			}catch (err){
				alert ('.post-edit-link Click Error' + err);
			}
			return true;
		});
		
		var autoOpen = false;
		if (FREEmium ['GET']['show'] != undefined){
			if (FREEmium ['GET']['show'] == 'menu'){
				autoOpen = true;
			}
		}
/*
* jQuery UI animation options...
blind,bounce,clip,drop,explode,fade,fold,highlight,puff,
pulsate,scale,shake,size,slide,transfer
Attributes: up, down, left, right, vertical, horizontal.
*/
		FREEmium ['effect_in'] = 'fold';
		FREEmium ['effect_out'] = 'fold';
		FREEmium ['max_menu_width'] = 660;
		var menu_width = FREEmium ['max_menu_width'];
		var avail_width = FREEmium ['win_width']-50;
		if ( avail_width < menu_width){
			menu_width = avail_width;
		}
		FREEmium ['menu_width'] = menu_width;
		$( "#laptop_menu" ).dialog ({
			autoOpen: autoOpen,
			modal: true,
			width: menu_width,
			open: function( event, ui ) {
				//$.ionSound.play ('poppop');
			},
			close: function( event, ui ) {
				//$.ionSound.play ('click_off');
			}
		});
		$('.laptop').click (function (){
			try {
				
				var menu_width = FREEmium ['max_menu_width'];
				var avail_width = FREEmium ['win_width']-50;
				if ( avail_width < menu_width){
					menu_width = avail_width;
				}
				/*
				var menu_width = avail_width;
				if ( menu_width < max_menu_width){
					menu_width = max_menu_width;
				}*/
				$( "#laptop_menu" ).dialog ({
					modal: true,
					width: menu_width,
					close: function( event, ui ) {
						//$.ionSound.play ('click_off');
					}
				});
				$( "#laptop_menu" ).dialog ('open');
			}catch (err){
				alert ('.laptop Click Error' + err);
			}
			return false;
		});
	}catch (err){
		alert ('ERROR FREEmium _laptop Error\n\n'+err);
	}
}