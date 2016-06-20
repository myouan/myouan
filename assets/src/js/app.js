jQuery( function( $ ) {

	/**
	 * Sticky header
	 */
	( function() {
		var header   = $( '.l-header' );
		var contents = $( '.l-contents' );

		sticky_header();
		$( window ).resize( function() {
			sticky_header();
		} );

		$( window ).scroll( function() {
			var scroll = $( this ).scrollTop();
			if ( scroll ) {
				header.addClass( 'l-header--is-scrolled' );
			} else {
				header.removeClass( 'l-header--is-scrolled' );
			}
		} );

		function sticky_header() {
			if ( header.hasClass( 'l-header--overlay' ) ) {
				return;
			}
			var position = header.css( 'position' );
			if ( position === 'fixed' ) {
				contents.css( 'padding-top', header.outerHeight() );
			} else {
				contents.css( 'padding-top', '' );
			}
		}
	} )();

	/**
	 * masonry
	 */
	( function() {
		exec_masonry(
			$( '.p-recent-news-masonry__list' ),
			{
				itemSelector: '.p-recent-news-masonry__item'
			}
		);

		exec_masonry(
			$( '.p-recent-item-masonry__list' ),
			{
				itemSelector: '.p-recent-item-masonry__item'
			}
		);

		function exec_masonry( target, option ) {
			var bp_md_min = 992;
			var is_active = false;

			$( window ).load( function() {
				toggle_masonry();
			} );

			$( window ).resize( function() {
				toggle_masonry();
			} );

			function toggle_masonry() {
				if ( $( 'body' ).width() < bp_md_min ) {
					if ( is_active ) {
						target.masonry( 'destroy' );
					}
					target.css( 'height', '' );
					is_active = false;
				} else {
					target.masonry( option );
					is_active = true;
				}
			}
		}
	} )();

} );
