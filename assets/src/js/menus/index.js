
const secondaryMenuBtn = document.querySelector( '.header-secondary-menu-icon-wrap' );
const secondaryMenu = document.querySelector( '.header-secondary-menu-items-wrap' );
const closeSecondaryMenuBtn = document.querySelector( '.close-secondary-menu' );

if ( secondaryMenuBtn ) {
	secondaryMenuBtn.addEventListener( 'click', () => {
    if ( secondaryMenu.classList.contains('open') ) {
      secondaryMenu.classList.remove( 'open' );
    } else {
      secondaryMenu.classList.add( 'open' );
    }
  } )
}

if ( closeSecondaryMenuBtn ) {
  closeSecondaryMenuBtn.addEventListener( 'click', () => {
    if ( secondaryMenu ) {
      secondaryMenu.classList.remove( 'open' );
    }
  } )
}
