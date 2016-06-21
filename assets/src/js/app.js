var $ = require( 'jquery' );

import Drawer from './drawer.js';
new Drawer();

import StickyHeader from './sticky-header.js';
new StickyHeader();

import Masonry from './masonry.js';
new Masonry( $( '.p-recent-news-masonry__list' ), {
	itemSelector: '.p-recent-news-masonry__item'
} );
new Masonry( $( '.p-recent-item-masonry__list' ), {
	itemSelector: '.p-recent-item-masonry__item'
} );
