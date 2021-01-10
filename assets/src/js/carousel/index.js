

( function ( $ ) {
	class SlickCarousel {
    constructor() {
			this.initiateCarousel();
		}

		initiateCarousel() {
			$ ('.hero-section').slick( {
				autoplay: false,
				autoplaySpeed: 1000,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
      $ ('.project-carousel-container').slick( {
        autoplay: false,
        autoplaySpeed: 1000,
        slidesToShow: 1,
      });
		}
	}

	new SlickCarousel();

}( jQuery ) );
