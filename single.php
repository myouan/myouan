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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
