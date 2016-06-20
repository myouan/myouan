<?php
$children = get_children( array(
	'post_parent'    => get_the_ID(),
	'post_type'      => 'page',
	'posts_per_page' => -1,
) );

if ( ! $children ) {
	return;
}
?>
<ul class="p-child-pages">
	<?php foreach ( $children as $post ) : setup_postdata( $post ); ?>
	<li class="p-child-pages__item">
		<div class="c-media">
			<div class="c-media__figure" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
			<div class="c-media__body">
				<div class="p-child-pages__title"><?php the_title(); ?></div>
				<div class="p-child-pages__body">
					<div class="p-child-pages__excerpt">
						<?php the_excerpt(); ?>
					</div>
					<a class="btn btn-primary" href="<?php the_permalink(); ?>">詳しくはこちら</a>
				</div>
			</div>
		</div>
	</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>
