<?php
if ( ! class_exists( 'SCF' ) ) {
	return;
}

$image     = SCF::get_option_meta( 'theme-option', 'front-page-feature-image' );
$image_url = wp_get_attachment_url( $image );
$html      = SCF::get_option_meta( 'theme-option', 'front-page-feature-html' );

if ( ! $image_url && ! $html ) {
	return;
}
?>
<section class="p-feature c-section">
	<div class="p-feature__figure" style="background-image: url( <?php echo esc_url( $image_url ); ?> );"></div>
	<div class="p-feature__body">
		<?php echo $html; ?>
	</div>
</section>
