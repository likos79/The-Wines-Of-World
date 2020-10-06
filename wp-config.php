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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wines-of-world-wp' );

/** MySQL database username */
define( 'DB_USER', 'wow_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AwY8Ac2RW2AJrkXM' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.` p-l2)_U)UOl6g7<eloqt{vLL[sT[}S_fJykOvI;SKodYDNUOTBrE+f|LH0!%#' );
define( 'SECURE_AUTH_KEY',  '_7=`|dzd/QT_s?EYAbCj5D:)K>qwKAQKT^lr+W+K6#uL-G.aDjHnS.1;wH(`JTX]' );
define( 'LOGGED_IN_KEY',    'i)c=$K=9C$C G{[h9uLd^;q,c:UbO:/FK@9O]Q~y^!wEI@RK?o<{lLz8XFM6)iR+' );
define( 'NONCE_KEY',        '9|Uat/pD+q]4TUy:rjAcnHw+kjT>ajT}LR4HsCWeAp)M>7~d;B^X2VAdfKUL-791' );
define( 'AUTH_SALT',        'wuz~1%Q~#:8grE`K/IC3MQimGW.Te/,)2 &kyL[jo;(3bLMq0Qw<_VlCw4BAcf@4' );
define( 'SECURE_AUTH_SALT', ']0ESW`_Ax/,^z9zAj[(xPQUUh/NmRwC<xMSe>C%gk@h@N1/|,8Z*bo?7B6r6Oxte' );
define( 'LOGGED_IN_SALT',   'iso-3MSZ^9D5Z*ba>{$/I(2Hj)yKm0r+?ddY(4e)C}LSS7_xk045w|cB-Vz@|Q!2' );
define( 'NONCE_SALT',       '<#~{-^,|Bw|aKGvL3;HtG,i4=?;g#Da5r7@eOwR=HMY9sUn;9hw&yfp~y>i1ihX)' );

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

