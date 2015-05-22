//////////////////////////////////////
//	Open Source Listingslab ECMAScript
/*	View (MVC) */
function _view (){
	try {
		_preloader ();
		_loginform ();
		_site_style ();
		_fonts ();
		$('#wordpress_widgets').hide();
	}catch (err){
		alert ('FREEmium _view\n\n'+err);
	}
}
function _site_style (){
// Styles the site
	try {
		$('.product_meta').hide();
		_css ($('#_categories'), 'float', 'left' );
		
		_css ($('.shortcode_blog_img'), 'float', 'right' );
		_css ($('.shortcode_blog_img'), 'margin-left', '15px' );
		_css ($('.shortcode_blog_img'), 'margin-bottom', '15px' );
		_css ($('.shortcode_blog_img'), 'max-width', '100px' );
		_css ($('.shortcode_blog_img'), 'max-height', '100px' );
		
		$('#_categories').hide();
		
		_css ($('#FREEmium .accordion'), 'margin', '25px' );
		
		_css ($('#FREEmium .icon_listed'), 'max-width', '25%' );
		_css ($('#FREEmium .icon_listed'), 'float', 'right' );
		_css ($('#FREEmium .icon_listed'), 'margin-left', '10px' );
		
		_css ($('#FREEmium #message'), 'margin', 'auto' );
		_css ($('#FREEmium #message'), 'width', '100%' );
		
		_css ($('#laptop_menu_left'), 'width', '48%' );
		_css ($('#laptop_menu_left'), 'float', 'left' );
		
		_css ($('#laptop_menu_right'), 'width', '48%' );
		_css ($('#laptop_menu_right'), 'float', 'right' );
		
		_css ($('#FREEmium .entry-header'), 'padding', '0px');
		
		_css ($('#FREEmium .post-thumbnail'), 'float', 'left' );
		_css ($('#FREEmium .post-thumbnail'), 'margin-right', '25px' );
		
		_css ($('.wp-links'), 'float', 'left');
		_css ($('.wp-keywords'), 'width', '64%');
		_css ($('.wp-categories'), 'width', '35%');
		
		_css ($('.wp-keywords'), 'padding', '10px');
		_css ($('.wp-categories'), 'padding', '10px');
		
		
		_css ($('.dialog_icon'), 'float', 'left' );
		_css ($('.dialog_icon'), 'width', '100px' );
		_css ($('.dialog_icon'), 'margin-right', '25px' );
		_css ($('.dialog_buttons'), 'margin-top', '100px' );
		
		$('#FREEmium .site-title').hide();
		$('#FREEmium .site-description').hide();
		$('#FREEmium .comments-link').hide();
		
		_css ($('#FREEmium li'), 'list-style', 'none' );
		_css ($('#main li'), 'list-style-image', 'url("'+FREEmium ['app_root']+'/img/png/system/bullet.png")' );
		
		_css ($('#FREEmium article'), 'padding', '0px');
		_css ($('#FREEmium article'), 'background', 'none');
		
		
		_css ($('#FREEmium #version'), 'margin-top', '2px' );
		
		_css ($('#FREEmium .github'), 'float', 'left' );
		_css ($('#FREEmium .github'), 'margin-right', '10px' );
		_css ($('#FREEmium .github'), 'margin-left', '5px' );
		
		var children_html = $('#children').html();
		if (children_html != undefined){
			if (children_html.length < 100){
				$('#children').hide ();
				_css ($('#FREEmium #siblings'), 'margin', '10px' );
			}else{
				$('#siblings').hide ();
				_css ($('#FREEmium #children'), 'margin', '10px' );
			}
		}
		_adjust_winmode ();
	}catch (err){
		alert ('FREEmium view.js \n\n _site_style Error\n\n'+err);
	}
}
function _preloader (){
// Styles the preloader
	try {
		_css ($('#preloader'), 'margin-top', '100px' );
		_css ($('#preloader'), 'width', '100%' );
		_css ($('#preloader'), 'text-align', 'center' );
	}catch (err){
		alert ('FREEmium view.js \n\n _preloader Error\n\n'+err);
	}
}
function _loginform (){
// Styles the login form
	try {
		_css ($('#user_login'), 'width', '100%' );
		var rm = $('#rememberme')[0];
		if (rm != undefined){
			$('#rememberme')[0].checked = true;
			$('.login-remember').hide ();
		}
	}catch (err){
		alert ('FREEmium view.js \n\n _loginform Error\n\n'+err);
	}
}

function _adjust_winmode (){
// Styles the page after resize
	try {
		
		_css ($('#FREEmium_nav'), 'margin-left', '3px' );
		_css ($('#FREEmium_nav'), 'margin-bottom', '15px' );
		_css ($('#FREEmium #icon'), 'max-height', '50px' );
		if (FREEmium ['win_mode'] == 'smallest'){
			_css ($('#FREEmium .entry-header'), 'padding-top', '35px');
			_css ($('#FREEmium .entry-header'), 'padding-left', '25px');	
		} else if (FREEmium ['win_mode'] == 'small'){
			_css ($('#FREEmium #icon'), 'max-height', '50px' );
		} else if (FREEmium ['win_mode'] == 'smallish'){
			_css ($('#FREEmium #icon'), 'max-height', '50px' );
		} else if (FREEmium ['win_mode'] == 'smaller'){
			_css ($('#FREEmium #icon'), 'max-height', '50px' );
		} else if (FREEmium ['win_mode'] == 'medium'){
			_css ($('#FREEmium #icon'), 'max-height', '150px' );
			_css ($('#FREEmium_nav'), 'margin-left', '55px' );
		} else if (FREEmium ['win_mode'] == 'big'){
			_css ($('#FREEmium #icon'), 'max-height', '150px' );
			_css ($('#FREEmium_nav'), 'margin-left', '65px' );
		} else if (FREEmium ['win_mode'] == 'biggest'){
			_css ($('#FREEmium #icon'), 'max-height', '150px' );
			_css ($('#FREEmium_nav'), 'margin-left', '80px' );
		}
	}catch (err){
		console.log ('FREEmium view.js \n\n _site_style Error\n\n'+err);
	}
}		

function _fonts (){
// Uses CSS at runtime to set the font to a Google
	try {
		_css ($('body'), 'font-family', 'Lato' );
		_css ($('body'), 'color', FREEmium ['colours']['text'] );
		_css ($('pre'), 'font-family', 'Courier New' );
		_css ($('a'), 'border-bottom', 'none' );
		_css ($('h4'), 'margin', '0px' );
		_css ($('h3'), 'margin', '0px' );
		_css ($('h2'), 'margin', '0px' );
		_css ($('h1'), 'margin', '0px' );
		_css ($('h4'), 'color',  FREEmium ['colours']['htags']);
		//_css ($('h3'), 'color',  FREEmium ['colours']['htags']);
		_css ($('h2'), 'color',  FREEmium ['colours']['htags']);
		_css ($('h1'), 'color',  FREEmium ['colours']['htags']);
	}catch (err){
		alert ('FREEmium view.js \n\n _fonts Error\n\n'+err);
	}
}
function _colour_links (){
// colours links
	try {
		_css ($('blockquote a'), 'color',  FREEmium ['colours']['links']);
		_css ($('p a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.posted-on a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.author a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.cat-links a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.tags-links a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.display-posts-listing a'), 'color',  FREEmium ['colours']['links']);
		_css ($('h1 a'), 'color',  FREEmium ['colours']['links']);
		_css ($('h2 a'), 'color',  FREEmium ['colours']['links']);
		_css ($('h3 a'), 'color',  FREEmium ['colours']['links']);
		_css ($('h4 a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.nav-links a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.entry-content a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.widget a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.wp-links a'), 'color',  FREEmium ['colours']['links']);
		_css ($('.main-navigation a'), 'color',  FREEmium ['colours']['sidebar']);
		_css ($('.btn_category'), 'color',  FREEmium ['colours']['links']);
	}catch (err){
		console.log (err);
	}
}