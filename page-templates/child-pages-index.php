<?php
/**
 * Template Name: Child Pages Index
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'templates/object/project/page-header' ); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'templates/content/content', get_post_type() );
			}
			?>

			<?php get_template_part( 'templates/object/project/child-pages' ); ?>
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_template_part( 'templates/object/project/front-page-widget-area--bottom' ); ?>
<?php get_template_part( 'templates/object/project/social-nav' ); ?>

<?php get_footer(); ?>
