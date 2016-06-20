<?php
/**
 * Template Name: Front Page 6
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'templates/object/project/main-visual' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'templates/object/project/recent-item-masonry' ); ?>
		<?php get_template_part( 'templates/object/project/feature' ); ?>
		<?php get_template_part( 'templates/object/project/recent-posts-list--exclude-faq' ); ?>
		<?php get_template_part( 'templates/object/project/recent-faq' ); ?>
		<?php get_template_part( 'templates/object/project/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'templates/object/project/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
