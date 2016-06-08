<?php if ( is_active_sidebar( 'front-page-bottom' ) ) : ?>
<div class="p-front-page-widget-area">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<?php dynamic_sidebar( 'front-page-bottom' ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
