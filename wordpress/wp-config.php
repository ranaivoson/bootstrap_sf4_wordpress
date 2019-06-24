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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'root');

/** MySQL hostname */
define( 'DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/** set the site URL */
define('WP_HOME','http://localhost/article/');
define('WP_SITEURL','http://localhost/article/');

/** Fix to get the dashboard working with the reverse proxy.*/
$_SERVER['REQUEST_URI'] = str_replace("/wp-admin/", "/article/wp-admin/",  $_SERVER['REQUEST_URI']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e20582975687216d06e75a93e0504b859a1b2010');
define( 'SECURE_AUTH_KEY',  '192fe076c9fbe98201db82f25c7471a30303b551');
define( 'LOGGED_IN_KEY',    '321b4bb21491a64612230882ca2d2e25c76e6eea');
define( 'NONCE_KEY',        '5dcecf04e39ccd18ee532514636c2d66a2831ebb');
define( 'AUTH_SALT',        '89e46bf0ced92821d1d9e4a047a9f0c095f1a583');
define( 'SECURE_AUTH_SALT', '14cb8a7614bb29ff96cf9da69543006901013457');
define( 'LOGGED_IN_SALT',   '98e88f55f2ccbf8fbfa1221dce78a2db0d19e84b');
define( 'NONCE_SALT',       'e74a6052dc543c015b30b585700d67d6d7455216');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
