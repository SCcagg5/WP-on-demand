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
define( 'DB_NAME', 'db_01');

/** MySQL database username */
define( 'DB_USER', '51oeioh7u9qw3f7ibjqwefJHVAssfJKJHCVasf');

/** MySQL database password */
define( 'DB_PASSWORD', 'jkhyvhkasfeuijkqeefiuvklAEFJKNJKVAEFGKJBakFVafUabGFAG');

/** MySQL hostname */
define( 'DB_HOST', 'db_testisginnovationfr');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b757affea79380e1822d4269e13e9c7eb17accf9');
define( 'SECURE_AUTH_KEY',  '39338b6d59bb569e513ba142b16272b4a412bf2a');
define( 'LOGGED_IN_KEY',    '9ef97c1c2f58f0eb3ee3ad7491f98f979c783f1a');
define( 'NONCE_KEY',        'b5753fa989eae138902517f22aa29898cfd6f185');
define( 'AUTH_SALT',        'f8aad770a37e6316e83863253f49278583a3bf09');
define( 'SECURE_AUTH_SALT', '1bcdf9df8b6a01ad991055d07e1755cae67cd8d6');
define( 'LOGGED_IN_SALT',   'bae34fee1a6ca5f84c292e86f9095cde374562de');
define( 'NONCE_SALT',       '1068bb7ecd07de908241044239eb3f8a483504bb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
