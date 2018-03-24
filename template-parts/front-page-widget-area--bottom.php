<?php
if ( ! is_active_sidebar( 'front-page-bottom' ) ) {
	return;
}
?>
<div class="l-front-page-widget-area c-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<?php dynamic_sidebar( 'front-page-bottom' ); ?>
			</div>
		</div>
	</div>
</div>
