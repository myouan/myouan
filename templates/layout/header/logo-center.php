<header id="header" class="l-header l-header--logo-center">
	<?php if ( has_nav_menu( 'header-nav' ) ) : ?>
	<div class="p-header-nav hidden-xs hidden-sm">
		<div class="container">
			<?php get_template_part( 'templates/object/project/header-nav' ); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
		<?php get_template_part( 'templates/object/project/site-branding' ); ?>
	</div>

	<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
	<nav class="p-global-nav hidden-xs hidden-sm" role="navigation">
		<div class="container">
			<?php get_template_part( 'templates/object/project/global-nav' ); ?>
		</div>
	</nav>
	<div class="hidden-md hidden-lg">
		<?php get_template_part( 'templates/object/component/hamburger-btn' ); ?>
	</div>
	<?php endif; ?>
</header>
