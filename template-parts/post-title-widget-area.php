<?php
if ( ! is_active_sidebar( 'post-title-bottom' ) ) {
	return;
}
?>
<div class="l-post-title-widget-area c-section">
	<?php dynamic_sidebar( 'post-title-bottom' ); ?>
</div>
