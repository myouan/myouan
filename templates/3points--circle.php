<?php
$points = wpbook_get_3points();

if ( ! $points ) {
	return;
}

$thumbnail_modifier = 'p-3points__thumbnail--circle';

include( '_3points.php' );
