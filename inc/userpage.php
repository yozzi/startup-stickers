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
        //'^([^/]*)/?',
        'index.php?member=$matches[1]',
        'top'
    );
}
add_action('init','userpage_rewrite_rule');

// Catch the URL and redirect it to a template file
function userpage_rewrite_catch() {
    global $wp_query;
    $user = get_user_by('login',$wp_query->query_vars['member']);
    
    if ( array_key_exists( 'member', $wp_query->query_vars ) && $user ) {
          
        function userpage_content($content) {
            global $wp_query;
            $user = get_user_by('login',$wp_query->query_vars['member']);   
            $content = '[stickers user=' . $user->ID . ']';
            $content = do_shortcode($content);
            return $content;
        }
        add_filter('the_content', 'userpage_content');
        
//        function userpage_title($text) {
//            global $wp_query;
//            return $wp_query->query_vars['member'];
//        }
        //add_filter('the_title', 'userpage_title');
        
//        function limit_1_post($limit) {
//            return 'LIMIT 1';
//        }
//        add_filter('post_limits', 'limit_1_post' );
        
        include (TEMPLATEPATH . '/page.php');
        exit;
        
    } elseif (array_key_exists( 'member', $wp_query->query_vars )) {
        wp_redirect( home_url(), 301 ); exit;
    }
}
add_action( 'template_redirect', 'userpage_rewrite_catch' );