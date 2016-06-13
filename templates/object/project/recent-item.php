<?php
$posts_item = get_posts( array(
	'post_type'      => 'item',
	'posts_per_page' => 8,
) );

if ( ! $posts_item ) {
	return;
}
?>
<section class="p-recent-item">
	<div class="container">
		<div class="row">
			<?php foreach ( $posts_item as $post ) :setup_postdata( $post ); ?>
			<div class="col-md-3">
				<div class="p-recent-item__item">
					<?php if ( post_type_supports( 'item', 'thumbnail' ) ) : ?>
					<div class="p-recent-item__thumbnail" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
					<?php endif; ?>
					<div class="p-recent-item__title"><?php the_title(); ?></div>
					<?php if ( class_exists( 'SCF' ) && SCF::get( 'url' ) ) : ?>
					<div class="p-recent-item__cart">
						<a class="btn btn-primary btn-block" href="<?php echo esc_url( SCF::get( 'url' ) ); ?>"><?php esc_html_e( '購入する','wpbook' ); ?></a>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
