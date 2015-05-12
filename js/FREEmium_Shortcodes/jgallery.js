//////////////////////////////////////
//	Open Source Listingslab ECMAScript
$(document).ready(function () {
	try {
		_css ($('.FREEmium_jgallery'), 'width', '100%' );
		_css ($('.FREEmium_jgallery_wrapper'), 'margin-bottom', '15px' );
        _css ($('.FREEmium_jgallery_wrapper'), 'margin-top', '15px' );
        
        //http://jgallery.jakubkowalczyk.pl/documentation
        $('.FREEmium_jgallery').jGallery( {
            mode: 'standard',
            canZoom: false,
            backgroundColor: '#000',
            textColor: '#fff',
            width: '100%',
            thumbnailsPosition: 'right',
            //hideThumbnailsOnInit: true,
            slideshowAutostart: true,
            slideshowInterval: '3s',
            thumbHeight: 75,
            thumbWidth: 75,
            draggableZoom: true,
            height: '350px'
        });
	}catch (err){
		alert ('FREEmium ERROR Document NOT ready \n' + err);	
	}
});