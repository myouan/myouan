<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php
					$layout = 'thumbnail';

					if ( class_exists( 'SCF' ) && SCF::get_option_meta( 'theme-option', 'archive-page-layout' ) ) {
						$layout = SCF::get_option_meta( 'theme-option', 'archive-page-layout' );
					}

					get_template_part( 'templates/entries/' . $layout );
					?>

					<?php get_template_part( 'templates/pagination' ); ?>
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
