<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<ul class="p-entries">
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'templates/content/content' );
				}
				?>
			</ul>
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
