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
define( 'AUTH_KEY',         ')nN>-Q$V*G%`}Eu~Y:R]Lw32m6)WMp,-)nbmik;z>8gLvg6|]-YPW$7cu4t-Nu4|' );
define( 'SECURE_AUTH_KEY',  '6[F1Sx4G/w*YwIQ^zZfq)pn=~1!$|xYrRsivbhHMSpxA l;W6M#n6H@:v3X4<-h_' );
define( 'LOGGED_IN_KEY',    '[-CIK73UTLq:7v#L)[i2;#2$t=F4DvwBd@.^c$~n*j+m}qu$r#W=a3%V`m;4?6Jb' );
define( 'NONCE_KEY',        'P*7ldtRdJ:}=563;Zy}.3qQuDa)I6C;m7nQMsa5sCBVdK/~4Pep0vSi9tT7) 1xv' );
define( 'AUTH_SALT',        'aM6SkV+1sRrtpE?tR%>rol;By&PXFKuaNa|)+[}1}2,VYOxE-413miRX&_;ZLCH|' );
define( 'SECURE_AUTH_SALT', 'Uzk;=~7UOQ<xK~x2@Tw.;+iV0fCB.|k:eg$tFjOiO1j-IQiil&E| :fq+$pw=~^l' );
define( 'LOGGED_IN_SALT',   '6Ao&RNFz4Z)NKn&qOS3{$fP~CC-]]-c3FZOc;Z0?q|]Xug(mmORz4CiRNEfEwG.q' );
define( 'NONCE_SALT',       'G*]-J[2*uH&~tws%1G|EhK|czbQj*A,z2)]DTu1ZkI~PDDi[q~}||>(%fjT|8v8$' );

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
