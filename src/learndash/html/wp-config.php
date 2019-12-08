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
define( 'DB_HOST', 'db_learntestisginnovationfr');

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
define( 'AUTH_KEY',         '30dd78f5f26fa40f6c596c530c12d47c0c691ae0');
define( 'SECURE_AUTH_KEY',  'eeea2e4d336670112d94da60d82464f4a22cffe9');
define( 'LOGGED_IN_KEY',    '7ee521957e8f0e7a68280900b04b93684856172b');
define( 'NONCE_KEY',        '4436dfaceda156dc7e6eaa53efc2e0b68dd29b2c');
define( 'AUTH_SALT',        '5b5200c6333685927f4db24ca34ea1215e0672a6');
define( 'SECURE_AUTH_SALT', '2fa2aa29686358cd0dbb4aea251142d31a9eae9e');
define( 'LOGGED_IN_SALT',   '01977a5c49f3c1239a89757c7094ade6d21fb234');
define( 'NONCE_SALT',       '8e8d01b65d101f8c64307ec23c8b05099f80b309');

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
