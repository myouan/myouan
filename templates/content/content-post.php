<article <?php post_class( array( 'p-content' ) ); ?>>
	<?php get_template_part( 'templates/content/element/subcopy' ); ?>

	<h1 class="p-content__title"><?php the_title(); ?></h1>

	<div class="p-content__entry-meta">
		<?php get_template_part( 'templates/entry-meta' ); ?>
	</div>

	<?php get_template_part( 'templates/content/element/excerpt' ); ?>

	<?php get_template_part( 'templates/post-title-widget-area' ); ?>

	<div class="p-content__body">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'templates/single-widget-area' ); ?>
</article>
