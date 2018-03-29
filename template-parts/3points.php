<?php
$points = myouan_get_3points();

if ( ! $points ) {
	return;
}

include( '_3points.php' );
