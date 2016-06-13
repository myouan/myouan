jQuery( function( $ ) {

	/**
	 * masonry
	 */
	( function() {
		var bp_md_min = 992;
		var isActive  = false;
		var masonryOption = {
			itemSelector: '.p-recent-news-marsonry__item'
		};
		var target = $( '.p-recent-news-marsonry__list' );

		$( window ).load( function() {
			toggleMasonry();
		} );

		$( window ).resize( function() {
			toggleMasonry();
		} );

		function toggleMasonry() {
			if ( $( 'body' ).width() < bp_md_min ) {
				if ( isActive ) {
					target.masonry( 'destroy' );
				}
				target.css( 'height', '' );
				isActive = false;
			} else {
				target.masonry( masonryOption );
				isActive = true;
			}
		}
	} )();

} );
