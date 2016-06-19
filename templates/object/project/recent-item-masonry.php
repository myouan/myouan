<?php
$posts_item = get_posts( array(
	'post_type'      => 'item',
	'posts_per_page' => 12,
) );

if ( ! $posts_item ) {
	return;
}
?>
<section class="p-recent-item-masonry">
	<div class="container">
		<ul class="p-recent-item-masonry__list">
			<?php foreach ( $posts_item as $post ) : setup_postdata( $post ); ?>
			<li class="p-recent-item-masonry__item">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="p-recent-item-masonry__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<div class="p-recent-item-masonry__title">
						<?php the_title(); ?>
					</div>
					<?php if ( class_exists( 'SCF' ) && SCF::get( 'url' ) ) : ?>
					<div class="p-recent-item-masonry__cart">
						<a class="btn btn-primary btn-block" href="<?php echo esc_url( SCF::get( 'url' ) ); ?>"><?php esc_html_e( '購入する','wpbook' ); ?></a>
					</div>
					<?php endif; ?>
				</a>
			</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>
</section>
