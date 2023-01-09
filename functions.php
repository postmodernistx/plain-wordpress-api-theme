<?php
/**
 * Return all items in REST API
 * If query contains per_page, it will return that number of posts.
 * @example domain/wp-json/wp/v2/posts?tags=18&per_page=3
 * @example domain/wp-json/wp/v2/posts
 */
function rest_api_change_items_per_page( $args, $request ) {
	$max = 999;
	if ( $request->get_param( 'per_page' ) ) {
		$max = (int)$request->get_param( 'per_page' );
	}
	$args['posts_per_page'] = $max;

	return $args;
}


add_filter( 'rest_post_query', 'rest_api_change_items_per_page', 10, 2 );
add_filter( 'rest_taxonomy_query', 'rest_api_change_items_per_page', 10, 2 );