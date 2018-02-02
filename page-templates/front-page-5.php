<?php
/**
 * Template Name: Front Page 5
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'templates/main-visual' ); ?>
		<?php get_template_part( 'templates/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'templates/recent-items' ); ?>
		<?php get_template_part( 'templates/recent-posts-list--exclude-faq' ); ?>
		<?php get_template_part( 'templates/recent-faq' ); ?>
		<?php get_template_part( 'templates/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'templates/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
