<header id="header" class="l-header l-header--logo-left">
	<?php get_template_part( 'templates/header-nav' ); ?>

	<div class="container">
		<?php get_template_part( 'templates/site-branding' ); ?>

		<?php $site_description = get_bloginfo( 'description' ); ?>
		<?php if ( $site_description ) : ?>
		<div class="p-site-description">
			<?php echo esc_html( $site_description ); ?>
		</div>
		<?php endif; ?>

		<?php if ( class_exists( 'SCF' ) ) : ?>
			<?php
			$header_btn_text = get_theme_mod( 'header-btn-text' );
			$header_btn_url  = get_theme_mod( 'header-btn-url' );
			?>
			<?php if ( $header_btn_text ) : ?>
			<div class="p-site-action">
				<a class="btn btn-primary btn-block" href="<?php echo esc_url( $header_btn_url ); ?>"><?php echo esc_html( $header_btn_text ); ?></a>
			</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
	<nav class="p-global-nav hidden-xs hidden-sm" role="navigation">
		<div class="container">
			<?php get_template_part( 'templates/global-nav' ); ?>
		</div>
	</nav>
	<?php endif; ?>

	<?php get_template_part( 'templates/mobile-nav' ); ?>
</header>
