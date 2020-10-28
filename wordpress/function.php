// ref: https://github.com/scorpiock/wp-perf-optimization-without-plugin/blob/master/functions.php
// Update following in your WordPress theme's functions.php file

// Disable emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Disable embeds
function disable_embed(){wp_dequeue_script('wp-embed');}
add_action('wp_footer', 'disable_embed');

// Disable xml-rpc
add_filter('xmlrpc_enabled', '__return_false');

// Disable jQuery migrate (may break somes plugins (no images, ...))
function deregister_qjuery() {if (!is_admin()) {wp_deregister_script('jquery');}}  
add_action('wp_enqueue_scripts', 'deregister_qjuery'); 

// Remove query strings
function remove_cssjs_ver( $src ) {if( strpos( $src, '?ver=')) $src = remove_query_arg('ver', $src); return $src;}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2); // disable this if you use a plugin to remove string on JS/CSS
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2); // disable this if you use a plugin to remove string on JS/CSS

// Remove WordPress version number (may break wp_version_check() for update)
remove_action('wp_head', 'wp_generator');

// Remove wlwmanifest link
remove_action('wp_head', 'wlwmanifest_link');

// Remove RSD Link
remove_action('wp_head', 'rsd_link');

// Remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Disable RSS feeds

// Remove RSS feeds links

// Remove Dashicons
function wpdocs_dequeue_dashicon() {if (current_user_can( 'update_core' )) {return;}
wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon');


// Disable scripts per page/post

// Disable scripts with Regex

// CDN Rewrite

// Disable Password Strength Meter
add_action('login_enqueue_scripts', function(){
wp_dequeue_script('user-profile');
wp_dequeue_script('password-strength-meter');
wp_deregister_script('user-profile');
$suffix = SCRIPT_DEBUG ? '' : '.min';
wp_enqueue_script( 'user-profile', "/wp-admin/js/user-profile$suffix.js", array( 'jquery', 'wp-util' ), false, 1 );
});

// Add blank favicon

// Disable Google Fonts

// Disable self pingbacks
function disable_pingback(&$links) {foreach ($links as $l => $link) if (0 === strpos($link, get_option('home'))) unset($links[$l]);}
add_action('pre_ping', 'disable_pingback');

// Disable WordPress Heartbeat API
add_action('init', 'stop_heartbeat', 1);
function stop_heartbeat() {wp_deregister_script('heartbeat');}

// Disable abnd limit post revisions (in wp-config.php)

// Disable REST API
// Remove REST API links

// Change autosave interval (in wp-config.php)

//* DNS prefetching
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

// Preconnect

// Disable WooCommerce scripts and styles

// Disable WooCommerce widgets

// Disable WooCommerce status meta box

// Disable WooCommerce cart fragments (AJAX)

// Disable Google Maps API

// Multisite spport (in wp-config.php)

// Change WordPress login URL

// Local analytics
