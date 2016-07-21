var $ = require( 'jquery' );

import StickyHeader from './sticky-header.js';
new StickyHeader();

import Masonry from './masonry.js';
new Masonry( $( '.p-recent-news-masonry__list' ), {
	itemSelector: '.p-recent-news-masonry__item'
} );
new Masonry( $( '.p-recent-items-masonry__list' ), {
	itemSelector: '.p-recent-items-masonry__item'
} );
