/////////////////////////////////////
// Open Source Listingslab ECMAScript
// FREEmium-blog shortcode
$(document).ready(function () {
	try {
		_css ($('.FREEmium_blog'), 'margin-bottom', '25px' );
		_css ($('.FREEmium_blog h2'), 'margin', '0px' );
		_css ($('.FREEmium_blog h2'), 'margin-bottom', '10px' );
		_css ($('.FREEmium_blog h2'), 'padding', '0px' );
		_css ($('.FREEmium_blog .blog_acc'), 'margin-top', '20px' );
		
		$( ".blog_acc" ).accordion({
      		heightStyle: "content",
      		collapsible: true,
      		active: false,
    		});
	}catch (err){
		console.log ('FREEmium-blog shortcode \n' + err);	
	}
});