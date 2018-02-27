<?php get_header(); ?>

<div id="contents" class="l-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php if ( have_posts() ) : ?>

						<?php
						$layout = get_theme_mod( 'archive-page-layout' );
						get_template_part( 'templates/entries/' . $layout );
						?>

					<?php else : ?>

						<p>
							<?php esc_html_e( 'ご指定の検索条件に合う投稿がありませんでした。他のキーワードでもう一度検索してみてください。', 'wpbook' ); ?>
						</p>

						<?php get_search_form(); ?>

					<?php endif; ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
