<?php
$points = array();
if ( class_exists( 'SCF' ) ) {
	for ( $i = 1; $i <= 3; $i ++ ) {
		$point = array();

		$point_image = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-image' );
		if ( $point_image ) {
			$image_url = wp_get_attachment_url( $point_image );
			if ( $image_url ) {
				$point = array_merge( $point, array(
					'image' => $image_url,
				) );
			}
		}

		$point_description = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-description' );
		if ( $point_description ) {
			$point = array_merge( $point, array(
				'description' => $point_description,
			) );
		}

		$point_url = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-url' );
		if ( $point_url ) {
			$point = array_merge( $point, array(
				'url' => $point_url,
			) );
		}

		if ( $point ) {
			$points[] = $point;
		}
	}
}
?>
<?php if ( $points ) : ?>
<section class="p-3points">
	<div class="container">
			<div class="row">
				<?php foreach ( $points as $point ) : ?>
				<div class="col-md-4">
					<div class="p-3points__item">
						<?php if ( !empty( $point['image'] ) ) : ?>
						<div class="p-3points__thumbnail" style="background-image: url(<?php echo esc_url( $point['image'] ); ?>);"></div>
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
<?php endif; ?>
