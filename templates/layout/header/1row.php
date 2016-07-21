<header id="header" class="l-header l-header--1row">
	<?php get_template_part( 'templates/object/project/header-nav' ); ?>

	<div class="container">
		<?php get_template_part( 'templates/object/project/site-branding' ); ?>

		<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
		<nav class="p-global-nav hidden-xs hidden-sm" role="navigation">
			<div class="pull-right">
				<?php get_template_part( 'templates/object/project/global-nav' ); ?>
			</div>
		</nav>
		<?php endif; ?>
	</div>

	<?php get_template_part( 'templates/object/project/mobile-nav' ); ?>
</header>
