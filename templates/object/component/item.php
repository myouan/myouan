<div class="c-item">
	<a href="<?php the_permalink(); ?>">
		<div class="c-item__thumbnail" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
		<div class="c-item__title"><?php the_title(); ?></div>
	</a>
	<?php if ( class_exists( 'SCF' ) && SCF::get( 'url' ) ) : ?>
	<div class="c-item__cart">
		<a class="btn btn-primary btn-block" href="<?php echo esc_url( SCF::get( 'url' ) ); ?>"><?php esc_html_e( 'この商品を購入する','wpbook' ); ?></a>
	</div>
	<?php endif; ?>
</div>
