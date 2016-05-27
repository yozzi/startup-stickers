<?php
/*
Plugin Name: StartUp Stickers
Description: Collect stickers with your children
Author: Yann Caplain
Version: 1.0.0
Text Domain: startup-stickers
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//Include this to check if a plugin is activated with is_plugin_active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

require('inc/enqueues.php');

// Shortcode
function startup_stickers_shortcode( $atts ) {

	// Attributes
    $atts = shortcode_atts(array(
            'bg' => ''
        ), $atts);
    
	// Code
    ob_start();
    require('init.php');
    return ob_get_clean();    
}
add_shortcode( 'stickers', 'startup_stickers_shortcode' );

// Shortcode UI
function startup_stickers_shortcode_ui() {

    shortcode_ui_register_for_shortcode(
        'stickers',
        array(
            'label' => esc_html__( 'Stickers', 'startup-stickers' ),
            'listItemImage' => 'dashicons-heart',
            'attrs' => array(
                array(
                    'label' => esc_html__( 'Background', 'startup-stickers' ),
                    'attr'  => 'bg',
                    'type'  => 'color',
                ),
            ),
        )
    );
};
if ( function_exists( 'shortcode_ui_register_for_shortcode' ) ) {
    add_action( 'init', 'startup_stickers_shortcode_ui');
}
?>