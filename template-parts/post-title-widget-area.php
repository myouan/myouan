<?php
if ( ! is_active_sidebar( 'post-title-bottom' ) ) {
	return;
}
?>
<div class="p-post-title-widget-area c-section">
	<?php dynamic_sidebar( 'post-title-bottom' ); ?>
</div>
