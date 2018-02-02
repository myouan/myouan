<ul class="p-entries">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<li class="p-entries__item">
			<div class="c-media">
				<div class="c-media__figure" style="background-image: url( <?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?> );"></div>
				<div class="c-media__body">
					<div class="p-entries__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="p-entries__body">
						<?php the_excerpt(); ?>
					</div>
					<?php get_template_part( 'templates/entry-meta' ); ?>
				</div>
			</div>
		</li>
	<?php endwhile; ?>
</ul>
