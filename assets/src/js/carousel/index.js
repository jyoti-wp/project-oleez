( function ( $ ) {

	class SlickCarousel {
		init() {
			this.initiateCarousel();
		}
	
		initiateCarousel() {
			$ ('.hero-section').slick( {
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	}

	new SlickCarousel();

}( jQuery ) );

"scripts": {
    "lint": "eslint --fix --ext .js,.jsx ."
}



