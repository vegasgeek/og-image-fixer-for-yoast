<?php
/**
 * Plugin Name: Fix OG:Image
 * Description: Uses the featured image as the Open Graph image if one exists.
 * Author: John Hawkins
 * Version: 1.0
 * Author URI: https://vegasgeek.com
 * Text Domain: fix-og-image
 *
 * @package Fix_OG_Images
 */

// exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter the Open Graph image to use the featured image if one exists.
 *
 * @param string $image The current Open Graph image.
 * @return string The new Open Graph image.
 */
function alter_existing_opengraph_image( $image ) {
	$post_id = get_the_ID();

	$featured_image = get_the_post_thumbnail_url( $post_id );

	if ( $featured_image ) {
		$image = $featured_image;
	}
	return $image;
}
add_filter( 'wpseo_opengraph_image', 'alter_existing_opengraph_image' );
