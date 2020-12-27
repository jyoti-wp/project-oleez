const searchForm = document.getElementById( 'header-search-form-wrap' );
const searchOpenBtn = document.getElementById( 'search-btn-icon' );
const searchCloseBtn = document.getElementById( 'search-form-close-btn' );

if ( searchCloseBtn ) {
	searchCloseBtn.addEventListener( 'click', () => {
    searchForm.classList.remove( 'open' );
  } )
}

if ( searchOpenBtn ) {
	searchOpenBtn.addEventListener( 'click', () => {
	  if ( searchForm.classList.contains( 'open' ) ) {
      searchForm.classList.remove( 'open' );
	  } else {
      searchForm.classList.add( 'open' );
    }
  } )
}
