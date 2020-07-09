// ref: https://github.com/scorpiock/wp-perf-optimization-without-plugin/blob/master/functions.php
// Update following in your WordPress theme's functions.php file

// Remove Block Library CSS
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// Remove Query String from Static Resources
function remove_cssjs_ver( $src ) {if( strpos( $src, '?ver=')) $src = remove_query_arg('ver', $src); return $src;}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);

// Remove Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove Shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Disable Embed
function disable_embed(){wp_dequeue_script('wp-embed');}
add_action('wp_footer', 'disable_embed');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove RSD Link
remove_action('wp_head', 'rsd_link');

// Hide Version
// but may break wp_version_check() for update
remove_action('wp_head', 'wp_generator');

// Remove WLManifest Link
remove_action('wp_head', 'wlwmanifest_link');

// Disable JQuery Migrate
// May break somes plugins (no images, ...)
function deregister_qjuery() {if (!is_admin()) {wp_deregister_script('jquery');}}  
add_action('wp_enqueue_scripts', 'deregister_qjuery'); 

// Disable Self Pingback
function disable_pingback(&$links) {foreach ($links as $l => $link) if (0 === strpos($link, get_option('home'))) unset($links[$l]);}
add_action('pre_ping', 'disable_pingback');

// Disable Heartbeat
add_action('init', 'stop_heartbeat', 1);
function stop_heartbeat() {wp_deregister_script('heartbeat');}

// Disable Dashicons in Front-end
function wpdocs_dequeue_dashicon() {if (current_user_can( 'update_core' )) {return;}
wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon');

// Disable Contact Form 7 CSS/JS on Every Page
add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

//* Adding DNS Prefetching
function wp_dns_prefetch() {
echo '<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="dns-prefetch" href="//apis.google.com" />
<link rel="dns-prefetch" href="//google-analytics.com" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//ssl.google-analytics.com" />
<link rel="dns-prefetch" href="//youtube.com" />
<link rel="dns-prefetch" href="//api.pinterest.com" />
<link rel="dns-prefetch" href="//connect.facebook.net" />
<link rel="dns-prefetch" href="//platform.twitter.com" />
<link rel="dns-prefetch" href="//syndication.twitter.com" />
<link rel="dns-prefetch" href="//syndication.twitter.com" />
<link rel="dns-prefetch" href="//platform.instagram.com" />
<link rel="dns-prefetch" href="//s.gravatar.com" />
<link rel="dns-prefetch" href="//s0.wp.com" />
<link rel="dns-prefetch" href="//stats.wp.com" />';
}
add_action('wp_head', 'wp_dns_prefetch', 0);
