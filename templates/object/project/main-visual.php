<?php
if ( ! is_active_sidebar( 'main-visual' ) ) {
	return;
}
?>
<div class="p-main-visual">
	<?php dynamic_sidebar( 'main-visual' ); ?>
</div>
