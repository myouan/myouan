<ul class="p-entry-meta">
	<li class="p-entry-meta__item"><?php the_time( get_option( 'date_format' ) ); ?>
	<?php
	$categories = get_the_terms( get_the_ID(), 'category' );
	$category_html = array();
	if ( ! is_wp_error( $categories ) && $categories ) {
		foreach ( $categories as $term ) {
			$category_html[] = sprintf(
				'<a href="%1$s">%2$s</a>',
				get_term_link( $term ),
				esc_html( $term->name )
			);
		}
	}
	if ( $category_html ) {
		printf(
			'<li class="p-entry-meta__item">%1$s: %2$s</li>',
			esc_html__( 'カテゴリー', 'wpbook' ),
			implode( ', ', $category_html )
		);
	}

	$tags = get_the_terms( get_the_ID(), 'post_tag' );
	$tags_html = array();
	if ( ! is_wp_error( $tags ) && $tags ) {
		foreach ( $tags as $term ) {
			$tags_html[] = sprintf(
				'<a href="%1$s">%2$s</a>',
				get_term_link( $term ),
				esc_html( $term->name )
			);
		}
	}
	if ( $tags_html ) {
		printf(
			'<li class="p-entry-meta__item">%1$s: %2$s</li>',
			esc_html__( 'タグ', 'wpbook' ),
			implode( ', ', $tags_html )
		);
	}
	?>
</ul>
