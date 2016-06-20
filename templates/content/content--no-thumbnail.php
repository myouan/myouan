<li class="p-entries__item">
	<div class="p-entries__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	<?php get_template_part( 'templates/object/project/entry-meta' ); ?>
	<div class="p-entries__body">
		<?php the_excerpt(); ?>
	</div>
</li>
