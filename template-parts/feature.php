<?php
$image_url = get_theme_mod( 'front-page-feature-image' );
$html      = get_theme_mod( 'front-page-feature-html' );

if ( ! $image_url && ! $html ) {
	return;
}
?>
<section class="p-feature c-section">
	<div class="p-feature__figure" style="background-image: url( <?php echo esc_url( $image_url ); ?> );"></div>
	<div class="p-feature__body">
		<?php echo wp_kses_post( $html ); ?>
	</div>
</section>
