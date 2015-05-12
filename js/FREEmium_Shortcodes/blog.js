/////////////////////////////////////
// Open Source Listingslab ECMAScript
// FREEmium-blog shortcode
$(document).ready(function () {
	try {
		//alert ('FREEmium-blog shortcode');
		//_css ($('.FREEmium_blog'), 'float', 'left' );
		//
		//_css ($('.FREEmium_blog'), 'padding', '5px' );
		//_css ($('.FREEmium_blog'), 'max-width', '50%' );
		_css ($('.FREEmium_blog'), 'margin-bottom', '25px' );
		_css ($('.FREEmium_blog h2'), 'margin', '0px' );
		_css ($('.FREEmium_blog h2'), 'margin-bottom', '10px' );
		_css ($('.FREEmium_blog h2'), 'padding', '0px' );
		
		_css ($('.shortcode_blog_btn'), 'width', '90px' );
		
		$( ".blog_acc" ).accordion({
      		heightStyle: "content",
      		collapsible: true,
      		active: false,
    		});
		
	}catch (err){
		alert ('FREEmium ERROR Document NOT ready \n' + err);	
	}
});