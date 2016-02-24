<?php

remove_action('wp_head', 'index_rel_link' ); 
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10, 0 );
remove_action( 'wp_head', 'wp_oembed_add_host_js', 10, 0 );

function cc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'cc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'cc_remove_wp_ver_css_js', 9999 );