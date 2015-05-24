//////////////////////////////////////
//	Open Source Listingslab ECMAScript
$(document).ready(function () {
	try {
		// #sc_microsites
		_style_microsites ();
		console.log ('[FREEmium-microsites] Shortcode');
		
	}catch (err){
		console.log (err);	
	}
});
function _style_microsites (){
// Describes what the function does
	try {
		$('#sc_microsites').addClass('ui-state- ui-corner-all');
		_css ($('#sc_microsites'),'border', '1px solid' + FREEmium ['colours']['ui_border']);
		_css ($('#sc_microsites'),'background', FREEmium ['colours']['ui_content_bg']);
		_css ($('#sc_microsites'),'margin-bottom', '10px');
	}catch (err){
		console.log (err);	
	}
}


