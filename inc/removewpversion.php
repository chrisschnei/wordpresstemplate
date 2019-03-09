<?php

function remove_wpversion() {
	return ;
}
add_filter('the_generator', 'remove_wpversion');

?>