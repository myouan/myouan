<?php get_header(); ?>

<?php get_template_part( 'templates/object/project/page-header' ); ?>

<div class="container">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/content/content', get_post_type() );
	}
	?>
</div>

<?php get_template_part( 'templates/object/project/front-page-widget-area--bottom' ); ?>
<?php get_template_part( 'templates/object/project/social-nav' ); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
