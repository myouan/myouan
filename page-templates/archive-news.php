<?php
/**
 * Template name: Archive News
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php
					query_posts( array(
						'post_type' => 'news',
					) );
					?>
					<ul class="p-entries">
						<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'templates/content/content' );
						}
						?>
					</ul>

					<?php get_template_part( 'templates/object/project/pagination' ); ?>
					<?php wp_reset_query(); ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
