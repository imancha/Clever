(function($) {
	"use strict";
	$('#menuMega').menu3d();
	//Google Maps Configuration
	var lat="-6.6213534";
	var lon="108.4510802";
	$('#map').gmap3({
		map:{
			options:{
				center: [lat, lon],
				zoom: 14
			}
		},
		marker:{
			latLng: [lat, lon]
		}
	});
	$('.quickbox').carousel({
		interval: 10000
	});
	//SPECIALS
	$('#productc2').carousel({
		interval: 4000
	});
	//RELATED PRODUCTS
	$('#productc4').carousel({
		interval: 6000
	});
})(jQuery);
