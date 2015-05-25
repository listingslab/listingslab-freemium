//////////////////////////////////////
//	Open Source Listingslab ECMAScript
/*	Model (MVC) */
function _model (){
	try {
		FREEmium ['GET'] = _get_vars ();
		FREEmium ['toggles'] = [];
		FREEmium ['toggles']['related_pages'] = 'off';
		FREEmium ['toggles']['message'] = 'off';
		FREEmium ['first_visit'] = true;
		//_cookies ();
		_resize ();
		//_create_sounds ();
		_hotkeys ();
		_accordions ();
	}catch (err){
		alert ('FREEmium model.js \n\n _model\n\n'+err);
	}
}
function _dispatch (fn, args) {
	try {
		fn = (typeof fn == "function") ? fn : window[fn];  // Allow fn to be a function object or the name of a global function
    		return fn.apply(this, args || []);  // args is optional, use an empty array by default
	}catch (err){
		alert ('FREEmium model.js \n _dispatch (fn, args)\n'+err);
	}
}
function _CorsRequest (r, callback) {
	try{
		var url = ADMIN_data ['api_url'] + r;
		var xhr = _createCORSRequest('GET', url);
		if (!xhr) {
			alert ('CORS not supported');
			return;
		}
		xhr.onload = function() {
			_dispatch (callback, [xhr.responseText]);
		};
		xhr.onerror = function(err) {
			alert ('Woops, there was an error making the request.');
		};
		xhr.send();
	}catch (err){	
		alert ('Error. _CorsRequest () \n\n' + err);
	}
}
function _createCORSRequest(method, url) {
	try{
		var xhr = new XMLHttpRequest();
		if ("withCredentials" in xhr) {
			xhr.open(method, url, true);
		} else if (typeof XDomainRequest != "undefined") {
			xhr = new XDomainRequest();
			xhr.open(method, url);
		} else {
			xhr = null;
		}
		return xhr;
	}catch (err){	
		alert ('Error. _createCORSRequest () \n\n' + err);
	}
}
function _accordions (){
// Adds show lists of posts as accordians
	try {
		$( ".accordion" ).accordion({
		  heightStyle: "content",
		  collapsible: true
		});
	}catch (err){
		alert ('FREEmium model.js \n\n_accordions Error\n\n'+err);
	}
}
function _hotkeys (){
// Setup useful keyboard shortcuts
	try {
		// Control e - Edit this page
		$(document).bind('keydown', 'ctrl+e', function(){
		$( "#laptop_menu" ).dialog ({
			width: FREEmium ['menu_width']
		});
		
		
		$( "#laptop_menu" ).dialog ('open');
		});
		
		// Control s - Open Search
		$(document).bind('keydown', 'ctrl+s', function(){
		$( "#nav_search" ).dialog ({
			width: FREEmium ['menu_width']
		});
		$( "#nav_search" ).dialog( "open" );
		});
	}catch (err){
		alert ('FREEmium model.js \n\n _hotkeys\n\n'+err);
	}
}

function _css (selector, css, value){
// Uses jQuery to set CSS
	try {
		$(selector).css (css,value);
	}catch (err){
		console.log ('FREEmium model.js \n\n _css\n\n'+err);
	}
}
function _btn (selector, icon, showtext){
// Uses jQueryui to create buttons
	try {
		new_button = $(selector).button ({
		icons: {
			primary: "ui-icon-"+icon
		},
		text: showtext 
		});
		new_button.click (function(){
			return true;
		});
		_css (new_button, 'border-bottom', '1px solid ' + FREEmium ['colours']['ui_border']);	
		_css (new_button, 'margin', '0px');
		_css (new_button, 'text-align', 'left');
		_css (new_button, 'width', '95%');
		
	}catch (err){	
		alert ('_btn\n\n'+err);
	}
}
function _random_str (len){
// returns a random string of inputted length
	try {
		var id = '';
		possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		for(i=0; i<len; i++ ){
			id += possible.charAt(Math.floor(Math.random() * possible.length));	
		}
		return id;
	}catch (err){
		alert ( 'FREEmium model.js \n\n _random_str () n\n'+err);
	}
}
function _get_readable_date (unix){
	try {
		var date = new Date(unix * 1000),
        year = date.getFullYear(),
        day = date.getDate(),
        month = date.getMonth(),
        hours = (date.getHours() < 10 ? '0' + date.getHours() : date.getHours()),
        minutes = (date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()),
        seconds = (date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds()),
        date_str = '' + day + '/' + month + '/' + year;
    		return date_str;
	}catch (err){
		alert ( 'FREEmium model.js \n\n _get_readable_date\n\n'+err);
	}
}
function _secs_to_mins (secs){
	try {
		var sec = parseInt(secs);
		var min=0;
		while(sec>59){
			sec-=60;
			min++;
		}
		return min + ' Mins, ' + sec +' Secs';
	}catch (err){
		alert ( 'FREEmium model.js \n\n _secs_to_mins\n\n'+err);
	}
}
function _create_sounds (){
	try {
		$.ionSound({
		    sounds: [
		        "_ting",
		     	"01_stress_pill",
		     	"02_entitled",
		     	"03_doing",
		     	"04_afraid",
		     	"05_enthusiasm",
		     	"06_goodbye",
		     	"07_operational",
		     	"08_message",
		     	"09_human_error",
		     	"click_off",
		     	"click_on",
		     	"poppop",
		     	"toggle"
		    ],
		    path: FREEmium ['app_root'] + "sounds/",                
		    multiPlay: true,               
		    volume: "1"
		});
		//$.ionSound.play ('click_on');
	}catch (err){
		alert ( 'FREEmium model.js \n\n _create_sounds \n\n'+err);
	}
}
function _resize (){
	// sets up the window resize functionality
	try {
		FREEmium ['win_width'] = $( window ).width();
		$( window ).resize(function() {
			_on_window_resize ($( window ).width());
		});
		_on_window_resize (FREEmium ['win_width']);
	}catch (err){
		alert ('FREEmium model.js \n\n _resize\n\n'+err);
	}
}
function _on_window_resize (winwidth){
// triggered on window resize
	try {
		FREEmium ['win_mode'] = 'biggest';
		FREEmium ['win_width'] = winwidth;
		FREEmium ['win_height'] = $( window ).height();
		if (winwidth < 1225){
			FREEmium ['win_mode'] = 'big';
		}
		if (winwidth < 1085){
			FREEmium ['win_mode'] = 'medium';
		}
		if (winwidth < 940){
			FREEmium ['win_mode'] = 'small';
		}
		if (winwidth < 865){
			FREEmium ['win_mode'] = 'smallish';
		}
		if (winwidth < 725){
			FREEmium ['win_mode'] = 'smaller';
		}
		if (winwidth < 605){
			FREEmium ['win_mode'] = 'smallest';
		}
		$html = '<p>Window size ' + FREEmium ['win_width'] + 'x' + FREEmium ['win_height'] + ' pixels';
		$html += '<br />Mode: ' + FREEmium ['win_mode'] + '</p>';
		//$('#insert').html ($html);
		_adjust_winmode ();
	}catch (err){
		alert ('FREEmium model.js \n\n _on_window_resize\n\n'+err);
	}
}
function _get_vars () {
// returns the GET variables from the URL
    try {
	    	var vars = [], hash, hashes = null;
	    if (window.location.href.indexOf("?") && window.location.href.indexOf("&")) {
	        hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    } else if (window.location.href.indexOf("?")) {
	        hashes = window.location.href.slice(window.location.href.indexOf('?') + 1);
	    }
	    if (hashes != null) {
	        for (var i = 0; i < hashes.length; i++) {
	            hash = hashes[i].split('=');
	            vars[hash[0]] = hash[1];
	        }
	    }
	    return vars;
    }catch (err){
		alert ('FREEmium model.js \n\n _get_vars\n\n'+err);
	}
}
function _show_message (type, message, icon) {
// Shows a message at the top of the screen
	try {
		FREEmium ['toggles']['message'] = 'on';
		if (type == 'Error'){
			state = 'ui-state-error';
			icon = 'ui-icon-alert';
		}else{
			state = 'ui-state-highlight';
			icon = 'ui-icon-info';
		}
		$m = '';
		$m += '<div class="ui-widget" id="the_message">';
		$m += '<div style="padding:20px; padding-bottom:25px;" class="' + state + ' ui-corner-all">';
		$m += '<span class="ui-icon '+icon+'" style="float: left;margin:5px;"></span>';
		$m += '<strong>' + type + '</strong> ';
		$m += '<a href="?dontshow=message" id="btn_close_message">Close</a>';
		$m += message;
		$m += '</div></div>';
		$('#FREEmium #message').html ($m);
		_btn ('#btn_close_message', 'close', false);
		$('#btn_close_message').click (function (){
			try {
				FREEmium ['toggles']['message'] = 'off';
				$('#FREEmium #message').hide ();
				//$.ionSound.play ('click_off');
			}catch (err){
				alert ('#btn_close_message Click Error' + err);
			}
			return false;
		});
		_css ($('#FREEmium #message'), 'padding-top', '50px' );
		_css ($('#FREEmium #message'), 'padding-left', '25px' );
		_css ($('#FREEmium #message'), 'padding-right', '25px' );
		$('#FREEmium #message').fadeIn ();
		setTimeout(function(){
			// Removes message at the top of the screen
			try {
				FREEmium ['toggles']['message'] = 'off';
				$('#FREEmium #message').fadeOut ();
			}catch (err){
				alert ('ERROR setTimeout _model.js\n' + err);	
			}
		},5000);
	}catch (err){
		alert ('FREEmium model.js \n\n _show_message\n\n'+err);
	}
}
function _testalert ($m){
// If you want to know if this .js is loaded, try triggering this function
	try {
		alert ($m);
	}catch (err){
		alert ('FREEmium model.js \n\n _testalert\n\n'+err);
	}
}