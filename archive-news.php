<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php
					$layout = get_theme_mod( 'archive-page-layout' );
					get_template_part( 'template-parts/entries/' . $layout );
					?>

					<?php get_template_part( 'template-parts/pagination' ); ?>
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
