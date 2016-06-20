	<footer id="footer" class="l-footer">
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div class="widgets-footer">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="p-copyright">
			<div class="container">
				Copyright <?php bloginfo( 'name' ); ?> All rights reserved.
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
