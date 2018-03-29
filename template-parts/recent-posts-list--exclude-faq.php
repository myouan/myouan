<?php
$recent_post_types = array();

if ( post_type_exists( 'news' ) ) {
	$recent_post_types = array_merge( $recent_post_types, array(
		'news' => __( 'お知らせ', 'myouan' ),
	) );
}

$recent_post_types = array_merge( $recent_post_types, array(
	'post' => __( 'ブログ', 'myouan' ),
) );

include( '_recent-posts-list.php' );
