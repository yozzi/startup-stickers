<?php

function startup_stickers_scripts() {
    wp_enqueue_style( 'startup-stickers-style', plugins_url( '../css/startup-stickers.css', __FILE__ ), array( ), false, 'all' );
    wp_enqueue_script( 'bootstrap-confirmation', plugins_url( '../js/bootstrap-confirmation.min.js', __FILE__ ), array( ), '', 'false' );
    wp_enqueue_script( 'screenfull', plugins_url( '../js/screenfull.min.js', __FILE__ ), array( ), '', 'false' );
    wp_enqueue_script( 'startup', plugins_url( '../js/startup.js', __FILE__ ), array( ), '', 'false' );
}

add_action( 'wp_enqueue_scripts', 'startup_stickers_scripts', 15 );