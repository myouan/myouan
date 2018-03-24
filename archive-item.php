<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php $layout = get_theme_mod( 'items-archive-page-layout' ); ?>

					<?php if ( 'thumbnail' === $layout ) : ?>

						<div class="p-recent-items">
							<div class="row">
								<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-md-4">
									<?php get_template_part( 'template-parts/item' ); ?>
								</div>
								<?php endwhile; ?>
							</div>
						</div>

					<?php elseif ( 'thumbnail-excerpt' === $layout ) : ?>

						<?php get_template_part( 'template-parts/entries/excerpt' ); ?>

					<?php endif; ?>

					<?php get_template_part( 'template-parts/pagination' ); ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
