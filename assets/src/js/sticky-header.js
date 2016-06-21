'use strict';

var $ = require( 'jquery' );

export default class StickyHeader {
	constructor() {
		this.header   = $( '.l-header' );
		this.contents = $( '.l-contents' );
		this.setListener();
	}

	setListener() {
		this.stickyHeader();

		$( window ).resize( () => {
			this.stickyHeader();
		} );

		$( window ).scroll( () => {
			const scroll = $( window ).scrollTop();
			if ( scroll ) {
				this.header.addClass( 'l-header--is-scrolled' );
			} else {
				this.header.removeClass( 'l-header--is-scrolled' );
			}
		} );
	}

	stickyHeader() {
		if ( this.header.hasClass( 'l-header--overlay' ) ) {
			return;
		}
		var position = this.header.css( 'position' );
		if ( position === 'fixed' ) {
			this.contents.css( 'padding-top', this.header.outerHeight() );
		} else {
			this.contents.css( 'padding-top', '' );
		}
	}
}
