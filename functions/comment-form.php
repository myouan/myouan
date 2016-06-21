<?php
/**
 * Comment form text field styling
 *
 * @param array $fields
 * @return array
 */
function wpbook_comment_form_default_fields( $fields ) {
	foreach ( $fields as $key => $field ) {
		$fields[$key] = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wpbook_comment_form_default_fields' );

/**
 * Comment form textarea styling
 *
 * @param string $comment_field
 * @return string
 */
function wpbook_comment_form_field_comment( $comment_field ) {
	$comment_field = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $comment_field );
	return $comment_field;
}
add_filter( 'comment_form_field_comment', 'wpbook_comment_form_field_comment' );

/**
 * Comment form button styling
 *
 * @param string $comment_field
 * @return string
 */
function wpbook_comment_form_submit_field( $submit_field ) {
	$submit_field = str_replace( 'class="submit"', 'class="submit btn btn-primary"', $submit_field );
	return $submit_field;
}
add_filter( 'comment_form_submit_field', 'wpbook_comment_form_submit_field' );
