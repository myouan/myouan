<?php
if ( ! class_exists( 'SCF' ) ) {
	return;
}

$subcopy = SCF::get( 'subcopy' );

if ( ! $subcopy ) {
	return;
}
?>

<div class="p-content__subcopy">
	<?php echo esc_html( $subcopy ); ?>
</dv>
