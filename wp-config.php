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
define( 'DB_NAME', 'ejuedula' );

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
define( 'AUTH_KEY',         'z, @O (o#&gG:Pxf1bOfg;i8RE8h6:|0+2u@OTvVjSkv>6fWY C:)enn56e::g?1' );
define( 'SECURE_AUTH_KEY',  ':{UIP(X6kp1RClc>gVN&C H&~vdl67cs~u/g?:aywdwH@yC@3dxpyU)?c}~=?O$g' );
define( 'LOGGED_IN_KEY',    '~bM|-=R(Q,U^bGHUkDi@B%W8*O-*^|.?C!0$Xx3|d1j#f#Wa6:2qkn8bP|Dt!Vib' );
define( 'NONCE_KEY',        'w+F(_`w>fKD%6gi-BRhK$w-O,+zz~{9($~6CSd]d@upH,4TuS]PdYa;(W}43udOQ' );
define( 'AUTH_SALT',        'QgS-K.B$Mlw4yR8b,Oc,K,yme#wTUS<E[BJ3C[Kx!j3ZfM]HpX %S]{/:BMc2d0Y' );
define( 'SECURE_AUTH_SALT', 'I{~IPRMF1fIA&_X7>o&6zf{YtKoBZxm<,-j|K`Refp]Y)P>MI}Y!}R(xj|H$#f<W' );
define( 'LOGGED_IN_SALT',   '.iUc!@hWlHH2>?h0?Z$72qH%l~jStv OE8KL?=y.s$hs oB&CZI:WO[ueFDA>zP#' );
define( 'NONCE_SALT',       'Ep[+*h7s?fJpV*f7[pwX0G`EU`35}vW-Id3rM`4+U_/d_i.H%wF B8Yy@[egcUfm' );

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
