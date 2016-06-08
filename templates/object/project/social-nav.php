<?php if ( has_nav_menu( 'social-nav' ) ) : ?>
<div class="p-social-nav">
	<div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'social-nav',
			'depth'          => 1,
			'fallback_cb'    => '',
		) );
		?>
	</div>
</div>
<?php endif; ?>
