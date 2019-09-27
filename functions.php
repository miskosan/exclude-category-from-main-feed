<? php
/**
* Exclude category from main feed, usable for category podcasting with Blubrry plugin.
* Add code to child theme functions.php file
*/

add_action('pre_get_posts', 'exclude_category' );
function exclude_category( &$wp_query )
// Exclude from loop, archive and feed but not from category page/feed
{ if( is_home() || ( is_feed() && !is_category() ) || ( is_archive() && !is_category() )) { // Exclude from home, feed, but not from category page/feed
set_query_var('category__not_in', array(2198, 1345, 1595, 2527)); // Exclude categories with ID 2198, 1345, 1595, 2527
}
}
