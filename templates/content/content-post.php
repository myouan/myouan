<article <?php post_class( array( 'p-content' ) ); ?>>
	<?php get_template_part( 'templates/object/project/content/subcopy' ); ?>

	<h1 class="p-content__title"><?php the_title(); ?></h1>

	<div class="p-content__entry-meta">
		<?php get_template_part( 'templates/object/project/entry-meta' ); ?>
	</div>

	<?php get_template_part( 'templates/object/project/content/excerpt' ); ?>

	<?php get_template_part( 'templates/object/project/post-title-widget-area' ); ?>

	<div class="p-content__body">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'templates/object/project/single-widget-area' ); ?>
</article>
