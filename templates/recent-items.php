<?php
$posts_item = get_posts( array(
	'post_type'      => 'item',
	'posts_per_page' => 8,
) );

if ( ! $posts_item ) {
	return;
}
?>
<section class="p-recent-items c-section">
	<div class="container">
		<div class="row">
			<?php foreach ( $posts_item as $post ) :setup_postdata( $post ); ?>
			<div class="col-md-3">
				<?php get_template_part( 'templates/item' ); ?>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
