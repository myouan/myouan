<?php
$points = wpbook_get_3points();

if ( ! $points ) {
	return;
}
?>
<section class="p-3points c-section">
	<div class="container">
			<div class="row">
				<?php foreach ( $points as $point ) : ?>
				<div class="col-md-4">
					<div class="p-3points__item">
						<?php if ( !empty( $point['image'] ) ) : ?>
						<div class="p-3points__thumbnail p-3points__thumbnail--circle" style="background-image: url(<?php echo esc_url( $point['image'] ); ?>);"></div>
						<?php endif; ?>
						<?php if ( !empty( $point['description'] ) ) : ?>
						<div class="p-3points__description">
							<?php echo nl2br( $point['description'] ); ?>
						</div>
						<?php endif; ?>
						<?php if ( !empty( $point['url'] ) ) : ?>
						<div class="p-3points__link">
							<a class="btn btn-primary" href="<?php echo esc_url( $point['url'] ); ?>"><?php esc_html_e( 'さらに詳しく', 'wpbook' ); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
	</div>
</section>
