<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME','wordpressblog');

/** MySQL database username */
define('DB_USER','wordpress');

/** MySQL database password */
define('DB_PASSWORD','');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY','ZxHi4PiGOGMImIQXSuVdZUxCjB2B9MY6bk4KyciIp4iCh5MorwGsP6Nvh/9P15OF');
define('SECURE_AUTH_KEY','OUrWBjnwPqtEWbDBCYuZMeEfkBS6P9aVh6m7XktUdfQxVYjAUhAViVAAfgFbEUMV');
define('LOGGED_IN_KEY','mJqHlK7osBNhtjgtj4V0p07iFXskf0LYQkvqT4337bunJx5BpKvFxD/PRV6KNYuF');
define('NONCE_KEY','WrB5tV0RKvuz+f8RsJjB9THTpXFUgmF336ivw94nMabUeqUUIUdOrD/VxjDagOZP');
define('AUTH_SALT','fvLkVwa0g0MlIJUCtBsqNsAp81PgsqX4MjlPNTKf4GEQVVdcSNlpmr30T/YCtFGd');
define('SECURE_AUTH_SALT','oT1xq2lUzlr9M+Z4F0D4yBTR9jy+Tuq/2C40LnXGDEmctywRYnXCQipeM3g6fEL2');
define('LOGGED_IN_SALT','aZ5CojuZ9GaKNvO/CfxcYw4STzk09mATuIW9FuvVhVPwdNFzq63ICY6jm/eBB5ep');
define('NONCE_SALT','iOdqzCrvAtI8s4gpzjRSNTmtCz/Uk/oyVAuGgbVpXQ57EEEDGEsHUN8iJoIem3ly');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/language-selector/languages. For example, install
 * de_DE.mo to wp-content/language-selector/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
define('WP_LANG_DIR', dirname(__FILE__) . '/wp-content/plugins/language-selector/languages');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
} else {
	$pageURL .= $_SERVER["SERVER_NAME"];
}

if ($_SERVER["HOST"] != "") {
	define('WP_SITEURL', $pageURL); //tidigare $pageURL
} else {
        define('WP_SITEURL', $pageURL.'/wordpress');    // $pageURL.'/wordpress
}

if (!defined('SYNOWORDPRESS'))
	define('SYNOWORDPRESS', 'Synology Inc.');
	
	
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
require_once(ABSPATH . 'syno-misc.php');