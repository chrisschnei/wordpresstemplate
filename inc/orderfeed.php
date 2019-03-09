<?php 
	/* Include published and future posts in rss feed. */
	function FuturePostsFeed($query) {
	    if ($query->is_feed) {
	         $query->set('post_status','publish,future');
	        $query->set('order', 'ASC');
	    }
	return $query;
	}
	add_filter('pre_get_posts','FuturePostsFeed');
?>