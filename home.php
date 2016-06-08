<?php get_header(); ?>

<div class="container">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/content/content' );
	}
	?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
