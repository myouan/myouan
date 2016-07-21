<header id="header" class="l-header l-header--logo-center">
	<?php get_template_part( 'templates/object/project/header-nav' ); ?>

	<div class="container">
		<?php get_template_part( 'templates/object/project/site-branding' ); ?>
	</div>

	<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
	<nav class="p-global-nav hidden-xs hidden-sm" role="navigation">
		<div class="container">
			<?php get_template_part( 'templates/object/project/global-nav' ); ?>
		</div>
	</nav>
	<?php endif; ?>

	<?php get_template_part( 'templates/object/project/mobile-nav' ); ?>
</header>
