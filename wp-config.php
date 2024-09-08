<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'RQ:vF{RR5N61Lx7_4NFPV(A]!c}~|YgP?CG0 d;rmI9kRr^GgqZ|n/I]Xi)9e2ug' );
define( 'SECURE_AUTH_KEY',  'W|jNng:<^9tXd;yHeg[pM[[L}|#Rr!H4Hy.rTtDpF>mX-s(z]y*t2`&P7]4sff4$' );
define( 'LOGGED_IN_KEY',    '6B2.4XyhX0}DRe)bCU[)Rh;tBf]$LVojXCGJk1 1G2`(1W6B no H@dVjHn&E}o4' );
define( 'NONCE_KEY',        '+9KWF%/j|9_NsxN!@}{;E02lXnD:ngd]daryfGfodOreK:3H=$Ve%0V@_rO!h:CE' );
define( 'AUTH_SALT',        't8uA)6E4;[f+S5mX*KO2^;%l vWWlci&j&nM!15((i``]USbP0}n^r0nu2uiN%q^' );
define( 'SECURE_AUTH_SALT', 'P$rpw+9Go3$+@vO^zK*k6wFkvuffpeD5W,h+!TxSwAj].vgey<}UpbpH~s~|(0|`' );
define( 'LOGGED_IN_SALT',   's(:X<d~YF_/@^TV$u/a>@|0g|HRvWXT1wu?Bfki3d+FTpr`*>^w?EhT4!+?03JTp' );
define( 'NONCE_SALT',       'zaZ)]iq~j?UOow,{k9BJwSW7-uHh3&wRIw#1jHC,M,5%+A11i&1F,OmD3H.UgmHV' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
