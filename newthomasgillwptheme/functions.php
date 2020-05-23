<?php
/**
 * ThomasGillWPTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThomasGillWPTheme
 */

function thomasgillwptheme_scripts() {
    wp_enqueue_script( 'extra js', get_template_directory_uri() . '/js/extra.js');
}

add_action( 'wp_enqueue_scripts', 'thomasgillwptheme_scripts' );
