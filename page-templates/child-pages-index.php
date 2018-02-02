<?php
/**
 * Template Name: Child Pages Index
 */
?>
<?php get_header(); ?>

<div id="contents" class="l-contents">
	<?php get_template_part( 'templates/page-header' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'templates/content/content', get_post_type() );
					}
					?>

					<?php get_template_part( 'templates/child-pages' ); ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'templates/front-page-widget-area--bottom' ); ?>
	<?php get_template_part( 'templates/social-nav' ); ?>
</div>

<?php get_footer(); ?>
