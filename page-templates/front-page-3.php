<?php
/**
 * Template Name: Front Page 3
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'template-parts/main-visual' ); ?>
		<?php get_template_part( 'template-parts/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'template-parts/3points--circle' ); ?>
		<?php get_template_part( 'template-parts/recent-posts-list--exclude-faq' ); ?>
		<?php get_template_part( 'template-parts/recent-faq' ); ?>
		<?php get_template_part( 'template-parts/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'template-parts/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
