<?php
if ( ! class_exists( 'SCF' ) ) {
	return;
}
?>
<div class="p-item-cta">
	<div class="row">
		<div class="col-md-6">
			<div class="p-item-cta__figure">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="p-item-cta__body">
				<div class="p-item-cta__description">
					<?php echo SCF::get( 'item-description' ); ?>
				</div>

				<?php if ( SCF::get( 'price' ) ) : ?>
				<div class="p-item-cta__price">
					<?php echo SCF::get( 'price' ); ?>
				</div>
				<?php endif; ?>

				<?php if ( SCF::get( 'url' ) ) : ?>
				<div class="p-item-cta__cart">
					<a class="btn btn-primary btn-block" href="<?php echo SCF::get( 'url' ); ?>"><?php esc_html_e( 'この商品を購入する', 'wpbook' ); ?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
