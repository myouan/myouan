<?php
if ( ! class_exists( 'SCF' ) ) {
	return;
}

$gallery = array();
for ( $i = 1; $i <= 4; $i ++ ) {
	$image = SCF::get_option_meta( 'theme-option', 'front-page-gallery-' . $i );
	$image_url = wp_get_attachment_url( $image );
	if ( $image_url ) {
		$gallery[] = $image_url;
	}
}

if ( ! $gallery ) {
	return;
}
?>
<section class="p-gallery c-section">
	<ul class="p-gallery__list">
		<?php foreach ( $gallery as $image_url ) : ?>
		<li class="p-gallery__item" style="background-image: url( <?php echo esc_url( $image_url ); ?> );"></li>
		<?php endforeach; ?>
	</ul>
</section>
