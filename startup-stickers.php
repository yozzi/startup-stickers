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

//require('inc/updater.php');

//require('inc/options.php');


















// Shortcode
function startup_stickers_shortcode( $atts ) {

	// Attributes
    $atts = shortcode_atts(array(
            'bg' => ''
        ), $atts);
    
	// Code
    ob_start();
    //if ( function_exists( 'startup_reloaded_setup' ) ) {
        //require get_template_directory() . '/template-parts/content-timeline.php';
    //} else {
        require('static/index.php');
    //}
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

// Enqueue scripts and styles.
function startup_stickers_scripts() {
    wp_enqueue_style( 'startup-stickers-style', plugins_url( '/static/css/styles.css', __FILE__ ), array( ), false, 'all' );
    wp_enqueue_script( 'bootstrap-confirmation', plugins_url( '/static/js/bootstrap-confirmation.min.js', __FILE__ ), array( ), '', 'false' );
    wp_enqueue_script( 'screenfull', plugins_url( '/static/js/screenfull.min.js', __FILE__ ), array( ), '', 'false' );
    wp_enqueue_script( 'startup', plugins_url( '/static/js/startup.js', __FILE__ ), array( ), '', 'false' );
}

add_action( 'wp_enqueue_scripts', 'startup_stickers_scripts', 15 );

// Add code to footer
function startup_stickers_footer() { ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){

        });
    </script>
<?php }

add_action( 'wp_footer', 'startup_stickers_footer' );

?>