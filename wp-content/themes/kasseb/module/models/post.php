<?php

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

/**
 * Class Kasseb_Model_Post
 */
class Kasseb_Model_Post {

	/**
     * Retrieve post's list
     *
     * @return array
     */
    public static function get_posts( $args=array() ) {
    	$args = wp_parse_args(
			$args,
			array(
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => 6,
	        	'paged'          => 1
			)
		);
    	return new WP_Query( $args );
    }

}