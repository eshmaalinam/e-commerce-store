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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'ovV9po05IRMk3R6RIxr7FziIRmDdKevgrhsU5wV7Eudxl4CfHomu6qRVCOmkQi844VyoesYC22x7C+D6/b+aJQ==');
define('SECURE_AUTH_KEY',  'ikqHucg9jdZ0a04XJ/w1UlCpfT2L20DMaGcPt5jl2/LMZf8JhYBAvmkRxYZtC0F9moE0VAcfCxZAM67foJWBTA==');
define('LOGGED_IN_KEY',    '/xsG8OtrTWZA1fvAOi0WfrbnB/a+9l1qI2m9ADRrqOcXJlNMCIVPtFIhFRvBNu1hZoeyd7SRhQHzb2bPbEPfAg==');
define('NONCE_KEY',        'LBAHdt7Cyf7jnuPxIsxTp0SK6X0p1JB/ouLoOv1rFHPi0sk3e5xUw9Aaa9S4Bgx3EfzK4zJBK7plHXNNOLccvA==');
define('AUTH_SALT',        'GVe3BGq4ByhIZuw9fMT0tV2Q7YR2HX6wsIABsIrwrTEmM2hmxMrIx4AnvAqTX2rAfsLJAvxFvm+rktGmF5bc+Q==');
define('SECURE_AUTH_SALT', 's/AThynA2+KRQs1IqA2Mu1UbBIhwcDhnCnamYwO8a4qhzQJKk6jb4F/yoz/BVfQf7EnyYX3BFr02vl3dkCacSw==');
define('LOGGED_IN_SALT',   'Fh/llikDWscMN9Ydgfc5bwPCrcB2SayRSIAdBvXWhtv5I6flSRYHox6bfIpszlqPiAREKgqZtR6YbJYmN/PZVg==');
define('NONCE_SALT',       'cu0BhXfRe+dszr75CnlHG3Cdp5h+mIMojipdeE8nk+38xZQqrLMf77PhTuxOhFlYxdyaRm8PxDb0wJYWl5BiCQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
