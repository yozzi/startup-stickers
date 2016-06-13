<?php

// Create the query var so that WP catches the custom /member/username url
function userpage_rewrite_add_var( $vars ) {
    $vars[] = 'member';
    return $vars;
}
add_filter( 'query_vars', 'userpage_rewrite_add_var' );

// Create the rewrites
function userpage_rewrite_rule() {
    add_rewrite_tag( '%member%', '([^&]+)' );
    add_rewrite_rule(
        '^member/([^/]*)/?',
        'index.php?member=$matches[1]',
        'top'
    );
}
add_action('init','userpage_rewrite_rule');

// Catch the URL and redirect it to a template file
function userpage_rewrite_catch() {
    global $wp_query;

    if ( array_key_exists( 'member', $wp_query->query_vars ) ) {
        
        
        function wpdev_before_after($content) {
        $content = do_shortcode('[stickers]');
        return $content;
        }
        add_filter('the_content', 'wpdev_before_after');
        
        
        include (TEMPLATEPATH . '/page.php');
        exit;
        
    }
}
add_action( 'template_redirect', 'userpage_rewrite_catch' );