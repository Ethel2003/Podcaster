<?php
/**
 * @package Videography Filmmaker
 * @subpackage videography-filmmaker
 * @since videography-filmmaker 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses videography_filmmaker_header_style()
*/

function videography_filmmaker_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'videography_filmmaker_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1400,
		'height'             => 75,
		'flex-height'        => true,
	    'flex-width'         => true,
		'wp-head-callback'   => 'videography_filmmaker_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'videography_filmmaker_custom_header_setup' );

if ( ! function_exists( 'videography_filmmaker_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see videography_filmmaker_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'videography_filmmaker_header_style' );
function videography_filmmaker_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$videography_filmmaker_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}
		";
	   	wp_add_inline_style( 'videography-filmmaker-basic-style', $videography_filmmaker_custom_css );
	endif;
}
endif; // videography_filmmaker_header_style
