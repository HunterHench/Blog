<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/vol10_1/260mb.net/n260m_34331560/htdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'n260m_34331560_816' );

/** Database username */
define( 'DB_USER', '34331560_1' );

/** Database password */
define( 'DB_PASSWORD', '79xW-2)SHp' );

/** Database hostname */
define( 'DB_HOST', 'sql111.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'skb4td5t8bc1wphgduofmnzytaqd9j7k9srqg2bogoxnrnyhv2vkgz9n5zwy5tls' );
define( 'SECURE_AUTH_KEY',  'yf7gra77xnww9qc3uo3p0weaftvkkwmel2dcjd8tnyhcmqynel61xmcmt03n5khs' );
define( 'LOGGED_IN_KEY',    'xrfmgvxgbt4x0fqddp5c870hd1pwuamdvpeuvfojcioehjtqxqwoy14bclhbnkpp' );
define( 'NONCE_KEY',        'jy8svkl4rvm77nq543cikeghjnhzexup47dy8wjkcs58evsedequxwepvzgnsco3' );
define( 'AUTH_SALT',        '9lf5sxhkrllhz4wdjdnrogqxnedyysq1xqsy1emiwebcyfkholm21ut98ofhizup' );
define( 'SECURE_AUTH_SALT', 'k02jplbqnsnfs4qcexgo8xmfep6ixofx0itsm6g54pq2dhverrceornjlxnuxhpo' );
define( 'LOGGED_IN_SALT',   'ock1wncgnyglehfzrdgsdegjgzpgpnfqlqjv9jm6ejbyezbn8a2tdrrlb8ehcxwj' );
define( 'NONCE_SALT',       'jcucwr0tyquoe3uuwezzvcnqvhetfidlf2grnvsu3rznf6qkvhqowlzt2gnm1cv8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpam_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
