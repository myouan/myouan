<?php
$gallery = array();
for ( $i = 1; $i <= 4; $i ++ ) {
	$image_url = get_theme_mod('front-page-gallery-' . $i );
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
