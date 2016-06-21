<?php
/**
 * Template Name: Front Page 4
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'templates/object/project/main-visual' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'templates/object/project/3points' ); ?>
		<?php get_template_part( 'templates/object/project/recent-news-masonry' ); ?>
		<?php get_template_part( 'templates/object/project/recent-items' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'templates/object/project/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
