//////////////////////////////////////
//	Open Source Listingslab ECMAScript
$(document).ready(function () {
	try {
		_account ();
	}catch (err){
		alert ('FREEmium ERROR Document NOT ready \n' + err);	
	}
});
function _account (){
// Describes what the function does
	try {
		_css ($('._account'),'border', '1px solid' + FREEmium ['colours']['border']);
		$('._account').addClass('ui-state- ui-corner-all');
		_css ($('._account_pad'),'margin', '15px');
		
		
	}catch (err){
		alert ('ERROR FREEmium _account Error\n\n'+err);
	}
}