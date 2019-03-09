<?php

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
	global $post;
	return '<br><a class="btn btn-default" href="'. get_permalink($post->ID) . '">Details</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>