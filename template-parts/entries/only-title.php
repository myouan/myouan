<ul class="p-entries">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<li class="p-entries__item">
			<div class="p-entries__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<?php get_template_part( 'template-parts/entry-meta' ); ?>
		</li>
	<?php endwhile; ?>
</ul>
