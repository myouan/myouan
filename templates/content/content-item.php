<article <?php post_class( array( 'p-content' ) ); ?>>
	<?php get_template_part( 'templates/object/project/content/subcopy' ); ?>

	<h1 class="p-content__title"><?php the_title(); ?></h1>

	<?php get_template_part( 'templates/object/project/content/entry-meta' ); ?>
	<?php get_template_part( 'templates/object/project/content/excerpt' ); ?>

	<div class="p-content__body">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'templates/object/project/content/item' ); ?>
</article>
