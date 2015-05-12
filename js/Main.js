//////////////////////////////////////
//	Open Source Listingslab ECMAScript
$(document).ready(function () {
	try {
		_model ();
		_view ();
		_controller ();
		$('#FREEmium').hide();
 		setTimeout(function(){
			try {
				_css ($('#FREEmium'), 'visibility', 'visible');
				$('#FREEmium').show();
				$('#preloader').hide();
			}catch (err){
				alert ('ERROR FREEmium __Main.js\n' + err);	
			}
		},500);
	}catch (err){
		alert ('FREEmium ERROR Document NOT ready \n' + err);	
	}
});
function _template_func (){
// Describes what the function does
	try {
		alert ('Describes what the function does');
	}catch (err){
		alert ('ERROR FREEmium _template_func Error\n\n'+err);
	}
}