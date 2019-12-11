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
define( 'DB_NAME', 'Blog-Web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yL5cYg3ROs1RuBhMC3nH0aUef89XIHXetKuz1nr9dAJ3kbxv16fSqo0wdN1xtcB7' );
define( 'SECURE_AUTH_KEY',  'G6Bau0qDWra7liiqUnXCpwxx97koCIsQdXJILBfyMHYIVNrHQTtIoHtXVWDUijkI' );
define( 'LOGGED_IN_KEY',    'mOl0qX1sjePZqU4lT1OnCDVRGbBIbUCibm8DZGmhiNUoGH5eyOBUBW9qc3AeviDx' );
define( 'NONCE_KEY',        '6mqdKqquKHSugK3Sk4cvXDT3opFDcisuyfI5BIF8OgnERnzScAozIxvfIzako2j1' );
define( 'AUTH_SALT',        '6nATFIrqF4tl3y82OLAXDuaVBQKKivhbDv90MbI3mWx3MVXAi11v3o4grZkxteu7' );
define( 'SECURE_AUTH_SALT', 'exsVAfFpQH2bFsniyvIg3In6EYJLFJswNbAPWlIAVpihNjIU5FSOV543oAAHY5Am' );
define( 'LOGGED_IN_SALT',   'AGnoSEXEmhVBUF3i1GbMjc8oHVogKaDdqMfAs0TPu2aXjhKXtqCYhVbXOLyBBf1n' );
define( 'NONCE_SALT',       '2jk5nZLw2Q2NsxobN6jq3hDgfhpucdO5iPxTaMDs5HCl5ypmGJkzmRoVZenTiAAh' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
