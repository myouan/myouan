<?php
if ( ! is_active_sidebar( 'post-bottom' ) ) {
	return;
}
?>
<div class="l-single-widget-area c-section">
	<?php dynamic_sidebar( 'post-bottom' ); ?>
</div>
