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
define( 'AUTH_KEY',         'bc21479f20b3c57ae0b8edeef874459d6197923a');
define( 'SECURE_AUTH_KEY',  'e56dfa7dbfd5f843925abb7a36d51a3c42341008');
define( 'LOGGED_IN_KEY',    '14b9409cc2e06cc53a0ec5878c74bea8b2abc15d');
define( 'NONCE_KEY',        '5ca47038588c50caf50da3c07e3b1353af892f07');
define( 'AUTH_SALT',        '5a1b937f5ab7a81163641bf385f9900a15be8d88');
define( 'SECURE_AUTH_SALT', 'ae9f72afc6e47c33e597fd4dd034d1f55dc6454a');
define( 'LOGGED_IN_SALT',   '8528c17d78ca831e8d0aa87e7e8c48c2c6d6b637');
define( 'NONCE_SALT',       '3d9b87dd134d0aad86e496eb2b15ce10f68216e1');

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
