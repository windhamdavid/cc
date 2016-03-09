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

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'add_wpcf7_scripts');
function add_wpcf7_scripts() {
  if (is_page(array('contact', 'survey', 'service', 'estimate'))) {
    if (function_exists('wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
      wpcf7_enqueue_styles();
    }
  }
}

add_action( 'admin_head', 'cc_hide' );
function cc_hide() {
    ?>
    <style type="text/css" media="screen">
    #footer {display:none;}
	#contextual-help-link-wrap {display: none;}
	#wpadminbar {display: none;}
	body.admin-bar #wpcontent, body.admin-bar #adminmenu {padding-top:0;}
	#wp-content-editor-tools{top:0 !important;position:relative!important;}
	#ed_toolbar{top:0px !important;}
	html.wp-toolbar{padding-top:0;}
	#postexcerpt p {display: none;}
    </style>
<?php }

function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );