<?php
if ( ! is_active_sidebar( 'post-bottom' ) ) {
	return;
}
?>
<div class="p-single-widget-area c-section">
	<?php dynamic_sidebar( 'post-bottom' ); ?>
</div>
