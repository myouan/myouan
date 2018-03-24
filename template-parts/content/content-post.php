<article <?php post_class( array( 'p-content' ) ); ?>>
	<?php get_template_part( 'template-parts/content/element/subcopy' ); ?>

	<h1 class="p-content__title"><?php the_title(); ?></h1>

	<div class="p-content__entry-meta">
		<?php get_template_part( 'template-parts/entry-meta' ); ?>
	</div>

	<?php get_template_part( 'template-parts/content/element/excerpt' ); ?>

	<?php get_template_part( 'template-parts/post-title-widget-area' ); ?>

	<div class="p-content__body">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'template-parts/single-widget-area' ); ?>
</article>
