//*** be in at the root of your wordpress installation
//** curl -LO https://git.io/fhnsM ./wp-config-sample.php
//* EDIT wp-config-sample.php
//* mv wp-config-sample.php wp-config.php
//* chown $www-user
//* chmod 0644 ./wp-config*.php

<?php

//** https://codex.wordpress.org/Editing_wp-config.php#Configure_Database_Settings
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define('DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );

define('DB_CHARSET', 'utf8mb4');

//** https://codex.wordpress.org/Editing_wp-config.php#table_prefix
$table_prefix = '';

//** https://codex.wordpress.org/Editing_wp-config.php#Security_Keys
//** generated with: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY', '');
define('SECURE_AUTH_KEY', '');
define('LOGGED_IN_KEY', '');
define('NONCE_KEY', '');
define('SECURITY_KEY', '');

define('AUTH_SALT', '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT', '');
define('NONCE_SALT', '');
define('SECURITY_SALT', '');

///*** PREFERENCE
//** https://codex.wordpress.org/Editing_wp-config.php#Moving_uploads_folder
//** mv wp-content/uploads ./assets
define( 'UPLOADS', 'assets' );

///*** PERFORMANCE
//** https://codex.wordpress.org/Editing_wp-config.php#Empty_Trash
define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', 10 );

//**https://codex.wordpress.org/Editing_wp-config.php#Cleanup_Image_Edits
define( 'IMAGE_EDIT_OVERWRITE', true );

//** https://codex.wordpress.org/Editing_wp-config.php#Post_Revisions
define( 'WP_POST_REVISIONS', 8 );
define( 'AUTOSAVE_INTERVAL', 120 );

//** https://codex.wordpress.org/Editing_wp-config.php#Automatic_Database_Optimizing
define( 'WP_ALLOW_REPAIR', true );

define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

//** https://codex.wordpress.org/Editing_wp-config.php#Cache
//* define( 'WP_CACHE', true );

define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

//** install https://wordpress.org/plugins/redis-cache/
//** configure https://github.com/hestiacp/hestiacp/issues/337#issuecomment-503344508
//* define( 'WP_REDIS_SCHEME', 'unix' );
//* define( 'WP_REDIS_DATABASE', '0' );
//* define( 'WP_REDIS_PATH', '/var/run/redis/redis.sock' );
//* define( 'WP_REDIS_PASSWORD', '' );

//** https://codex.wordpress.org/Editing_wp-config.php#WP_SITEURL
define( 'WP_SITEURL', 'https://www.domain.tld' );
define( 'WP_HOME',    'https://www.domain.tld' );

//** https://codex.wordpress.org/Editing_wp-config.php#Set_Cookie_Domain
//** Prevent sending cookies with each request
define( 'COOKIE_DOMAIN',  'www.domain.tld' );
define( 'NOBLOGREDIRECT', 'https://www.domain.tld' );

///*** SECURITY
//** https://codex.wordpress.org/Editing_wp-config.php#Custom_User_and_Usermeta_Tables
//** you have to rename the tables before (IE: Mysql [wordpress_db]> RENAME TABLE wp_user wp_234kJas)
//* define( 'CUSTOM_USER_TABLE',      $table_prefix . '234kJas' );
//* define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'L34jD' );

//** apps from https://github.com/10up/wp-vulnerability-scanner
//** token from https://wpvulndb.com/users/edit
//* define( 'VULN_API_TOKEN', 'YOUR_TOKEN_HERE' );

//** https://codex.wordpress.org/Editing_wp-config.php#Override_of_default_file_permissions
define( 'FS_METHOD','direct' );
define( 'FS_CHMOD_DIR',  ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

//** https://codex.wordpress.org/Editing_wp-config.php#Require_SSL_for_Admin_and_Logins
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );

//** https://wordpress.org/support/article/administration-over-ssl/#using-a-reverse-proxy
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';

//** Make a network
define('WP_ALLOW_MULTISITE', true);

//** https://codex.wordpress.org/Editing_wp-config.php#Disable_the_Plugin_and_Theme_Editor
define( 'DISALLOW_FILE_EDIT', true );

//** https://codex.wordpress.org/Editing_wp-config.php#Disable_Plugin_and_Theme_Update_and_Installation
define( 'DISALLOW_FILE_MODS', true );

//** https://codex.wordpress.org/Editing_wp-config.php#Debug
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'SAVEQUERIES',      false );

//** https://codex.wordpress.org/Editing_wp-config.php#Disable_WordPress_Auto_Updates
define( 'AUTOMATIC_UPDATER_DISABLED',   false );  // Disable all automatic updates
define( 'WP_AUTO_UPDATE_CORE',          true );   // Enable all core updates, including minor and major
define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', false );  // Disable DB Tables auto-update

//** https://codex.wordpress.org/Editing_wp-config.php#Disable_unfiltered_HTML_for_all_users
define( 'DISALLOW_UNFILTERED_HTML', true );

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
