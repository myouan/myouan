<?php
if ( ! post_type_exists( 'faq' ) ) {
	return;
}

$posts_faq = get_posts( array(
	'post_type'      => 'faq',
	'posts_per_page' => 4,
) );
?>
<section class="p-recent-faq c-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="p-recent-faq__title"><?php esc_html_e( 'よくあるご質問', 'wpbook' ); ?></h1>
				<ul class="p-recent-faq__list">
					<?php foreach ( $posts_faq as $post ) : setup_postdata( $post ); ?>
					<li class="p-reent-faq__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</div>
		</div>
	</div>
</section>
