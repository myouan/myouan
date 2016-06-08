<section class="p-recent-posts-list">
	<div class="container">
		<?php
		$recent_post_types = array(
			'post' => __( 'ブログ', 'wpbook' ),
		);
		if ( class_exists( 'SCF' ) ) {
			$recent_post_types = array(
				'news' => __( 'お知らせ', 'wpbook' ),
				'post' => __( 'ブログ', 'wpbook' ),
				'faq'  => __( 'よくあるご質問', 'wpbook' ),
			);
			$active_custom_post_types = SCF::get_option_meta( 'theme-option', 'custom-post-types' );
			if ( !in_array( 'news', $active_custom_post_types ) ) {
				unset( $recent_post_types['news' ] );
			}
			if ( !in_array( 'faq', $active_custom_post_types ) ) {
				unset( $recent_post_types['faq' ] );
			}
		}
		?>
		<?php foreach ( $recent_post_types as $post_type => $label ) : ?>
		<div class="p-recent-posts-list__item">
			<section class="p-recent-posts">
				<h1 class="p-recent-posts__title"><?php echo esc_html( $label ); ?></h1>
				<?php
				$recent_posts = get_posts( array(
					'post_type'      => $post_type,
					'posts_per_page' => 6
				) );
				?>
				<?php if ( $recent_posts ) : ?>
				<ul class="p-recent-posts__list">
					<?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
					<li class="p-recent-posts__item">
						<a href="<?php the_permalink(); ?>">
							<div class="c-media">
								<div class="c-media__figure" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
								<div class="c-media__body">
									<?php the_title(); ?>
								</div>
							</div>
						</a>
					</li>
					<?php endforeach; wp_reset_postdata( $post ); ?>
				</ul>
				<a class="btn btn-primary btn-block" href="<?php echo get_post_type_archive_link( $post_type ); ?>"><?php echo esc_html( $label ); ?>一覧</a>
				<?php endif; ?>
			</section>
		</div>
		<?php endforeach; ?>
	</div>
</section>
