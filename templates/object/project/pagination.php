<?php
global $wp_query;

if ( empty( $wp_query->max_num_pages ) || $wp_query->max_num_pages < 2 ) {
	return;
}
?>
<div class="p-pagination">
	<?php
	the_posts_pagination( array(
		'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__( 'Previous', 'mimizuku' ) . '</span>',
		'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__( 'Next', 'mimizuku' ) . '</span>',
	) );
	?>
</div>
