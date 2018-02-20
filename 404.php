<?php get_header(); ?>

<div id="contents" class="l-contents">
	<?php get_template_part( 'templates/page-header' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<p>
						<?php esc_html_e( 'ページが見つかりませんでした。', 'wpbook' ); ?><br />
						<?php esc_html_e( 'お探しのページが移動したか削除されています。', 'wpbook' ); ?><br />
						<?php esc_html_e( 'この検索ボックスから検索してください。', 'wpbook' ); ?><br />
					</p>

					<?php get_search_form(); ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'templates/front-page-widget-area--bottom' ); ?>
	<?php get_template_part( 'templates/social-nav' ); ?>
</div>

<?php get_footer(); ?>
