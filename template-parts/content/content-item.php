<article <?php post_class( array( 'p-content' ) ); ?>>
	<?php get_template_part( 'template-parts/content/element/subcopy' ); ?>

	<h1 class="p-content__title"><?php the_title(); ?></h1>

	<?php get_template_part( 'template-parts/content/element/excerpt' ); ?>

	<div class="p-content__body">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'template-parts/content/element/item' ); ?>
</article>
