<?php if ( ! has_nav_menu( 'mobile-nav' ) ) {
	return;
}
?>
<div class="p-mobile-nav hidden-md hidden-lg">
	<div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'mobile-nav',
			'depth'          => 1,
			'fallback_cb'    => '',
		) );
		?>
	</div>
</div>
