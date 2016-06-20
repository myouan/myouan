<?php
/**
 * Template Name: Front Page 1
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'templates/object/project/main-visual' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'templates/object/project/3points' ); ?>
		<?php get_template_part( 'templates/object/project/recent-posts-list' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'templates/object/project/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
