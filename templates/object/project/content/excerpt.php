<?php
if ( ! $post->post_excerpt ) {
	return;
}
?>
<div class="p-content__excerpt">
	<?php the_excerpt(); ?>
</div>
