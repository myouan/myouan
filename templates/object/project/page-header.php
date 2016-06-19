<?php
if ( ! class_exists( 'SCF' ) ) {
	return;
}

$main_visual = SCF::get( 'main-visual' );
$image_url = wp_get_attachment_url( $main_visual );

if ( ! $image_url ) {
	return;
}
?>
<div class="p-page-header" style="background-image: url( <?php echo esc_url( $image_url ); ?> );"></div>
