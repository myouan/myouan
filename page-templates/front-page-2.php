<?php
/**
 * Template Name: Front Page 2
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'templates/main-visual' ); ?>
		<?php get_template_part( 'templates/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'templates/3points' ); ?>
		<?php get_template_part( 'templates/gallery' ); ?>
		<?php get_template_part( 'templates/recent-posts-list' ); ?>
		<?php get_template_part( 'templates/feature' ); ?>
		<?php get_template_part( 'templates/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'templates/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
