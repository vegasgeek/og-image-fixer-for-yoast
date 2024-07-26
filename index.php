<?php
/**
 * Plugin Name: Fix OG:Image
 * Description: Uses the featured image as the Open Graph image if one exists.
 * Author: John Hawkins
 * Version: 1.0.1
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
function vg_alter_og_image( $image ) {
	$post_id = get_the_ID();

	$featured_image = get_the_post_thumbnail_url( $post_id );

	if ( $featured_image ) {
		$image = $featured_image;
	}
	return $image;
}
add_filter( 'wpseo_opengraph_image', 'vg_alter_og_image' );

/**
 * Filter the Open Graph image width to use the featured image width if one exists.
 *
 * @param int $width The current Open Graph image width.
 * @return int The new Open Graph image width.
 */
function vgalter_og_image_width( $width ) {
	$post_id = get_the_ID();

	$featured_image_id = get_post_thumbnail_id( $post_id );

	if ( $featured_image_id ) {
		$image_meta = wp_get_attachment_metadata( $featured_image_id );
		if ( isset( $image_meta['width'] ) ) {
			$width = $image_meta['width'];
		}
	}

	return $width;
}
add_filter( 'wpseo_opengraph_image_width', 'vgalter_og_image_width' );

/**
 * Filter the Open Graph image height to use the featured image height if one exists.
 *
 * @param int $height The current Open Graph image height.
 * @return int The new Open Graph image height.
 */
function vg_alter_og_image_height( $height ) {
	$post_id = get_the_ID();

	$featured_image_id = get_post_thumbnail_id( $post_id );

	if ( $featured_image_id ) {
		$image_meta = wp_get_attachment_metadata( $featured_image_id );
		if ( isset( $image_meta['height'] ) ) {
			$height = $image_meta['height'];
		}
	}

	return $height;
}
add_filter( 'wpseo_opengraph_image_height', 'vg_alter_og_image_height' );

/**
 * Filter the Open Graph image type to use the featured image type if one exists.
 *
 * @param string $type The current Open Graph image type.
 * @return string The new Open Graph image type.
 */
function vg_alter_og_image_type( $type ) {
	$post_id = get_the_ID();

	$featured_image_id = get_post_thumbnail_id( $post_id );

	if ( $featured_image_id ) {
		$image_path = get_attached_file( $featured_image_id );
		if ( $image_path ) {
			$image_info = wp_check_filetype( $image_path );
			if ( isset( $image_info['type'] ) ) {
				$type = $image_info['type'];
			}
		}
	}

	return $type;
}
add_filter( 'wpseo_opengraph_image_type', 'vg_alter_og_image_type' );
