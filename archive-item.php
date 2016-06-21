<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<div class="p-recent-items">
						<div class="row">
							<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-4">
								<?php get_template_part( 'templates/object/component/item' ); ?>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
