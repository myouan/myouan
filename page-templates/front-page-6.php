<?php
/**
 * Template Name: Front Page 6
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<main id="main" role="main">
		<?php get_template_part( 'template-parts/main-visual' ); ?>
		<?php get_template_part( 'template-parts/front-page-widget-area--top' ); ?>
		<?php get_template_part( 'template-parts/recent-items-masonry' ); ?>
		<?php get_template_part( 'template-parts/feature' ); ?>
		<?php get_template_part( 'template-parts/recent-posts-list--exclude-faq' ); ?>
		<?php get_template_part( 'template-parts/recent-faq' ); ?>
		<?php get_template_part( 'template-parts/front-page-widget-area--bottom' ); ?>
		<?php get_template_part( 'template-parts/social-nav' ); ?>
	</main>
</div>

<?php get_footer(); ?>
