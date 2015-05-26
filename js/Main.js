//////////////////////////////////////
//	Open Source Listingslab ECMAScript
$(document).ready(function () {
	try {
		//console.log ('Welcome to listingslab FREEmium');
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
				console.log ('ERROR FREEmium __Main.js\n' + err);	
			}
		},500);
	}catch (err){
		console.log ('FREEmium ERROR Document NOT ready \n' + err);	
	}
});
function _template_func (){
// Describes what the function does
	try {
		console.log ('Describes what the function does');
	}catch (err){
		console.log ('ERROR FREEmium _template_func Error\n\n'+err);
	}
}