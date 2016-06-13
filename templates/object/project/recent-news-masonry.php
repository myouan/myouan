<?php
$posts_news = get_posts( array(
	'post_type'      => 'news',
	'posts_per_page' => 12,
) );

if ( ! $posts_news ) {
	return;
}
?>
<section class="p-recent-news-marsonry">
	<div class="container">
		<ul class="p-recent-news-marsonry__list">
			<?php foreach ( $posts_news as $post ) : setup_postdata( $post ); ?>
			<li class="p-recent-news-marsonry__item">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="p-recent-news-marsonry__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<div class="p-recent-news-marsonry__title">
						<?php the_title(); ?>
					</div>
				</a>
			</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>
</section>
