<?php
$recent_post_types = array();

if ( post_type_exists( 'news' ) ) {
	$recent_post_types = array_merge( $recent_post_types, array(
		'news' => __( 'お知らせ', 'wpbook' ),
	) );
}

$recent_post_types = array_merge( $recent_post_types, array(
	'post' => __( 'ブログ', 'wpbook' ),
) );

if ( post_type_exists( 'faq' ) ) {
	$recent_post_types = array_merge( $recent_post_types, array(
		'faq' => __( 'よくあるご質問', 'wpbook' ),
	) );
}

include( '_recent-posts-list.php' );
