<?php
if ( ! has_nav_menu( 'header-nav' ) ) {
	return;
}
?>
<div class="p-header-nav hidden-xs hidden-sm">
	<div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'header-nav',
			'depth'          => 1,
			'fallback_cb'    => '',
		) );
		?>
	</div>
</div>
