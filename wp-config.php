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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baltacipedro' );

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
define( 'AUTH_KEY',         'Id2U/c#>7x]Au&$xR9J,`vP9I1w=6A/|!;q=8b@:Iq+Qo83V0tgDg5/?M:1}N>hG' );
define( 'SECURE_AUTH_KEY',  '2Da2 _z~8uxUDkKh>gr%w@U1j 5O]dDi)ZeaR#SgSW>YV)HpSFat>-}{!}xx5[|0' );
define( 'LOGGED_IN_KEY',    'qj2m=%7Bs,#_JVCvmQF~MD<i9qo/41,9R,x:c(qijKAyKFf!t;&sJi S7nsl&a~(' );
define( 'NONCE_KEY',        'nP;J)%{65P`B&&lqI1.s=m]z?x~qc;]mYpqQI5IBq -b2L3g+S1tp40*m)ilAU]P' );
define( 'AUTH_SALT',        'Kd5Ct}H<CzT9/Qu<rroDJ,Z@* 12>x/GZj-efqkaAGI7}q=#6=>cU1I16WwT*l(V' );
define( 'SECURE_AUTH_SALT', '^Wzdaav+!j9,uo{.ooOuXh*q(}r bKi}|6/2#F%xS!oEW$24hC~ghT~s#9SKInSn' );
define( 'LOGGED_IN_SALT',   'nJI-t<u4Dy#Si>i5N0gY6.gbXuUShn^0lJ-(<FMR:&Xnu=1c(@puA)9(g+skM6t4' );
define( 'NONCE_SALT',       'tB?$lMWqw8swl~AvfFj8E9hT!6*p #.bsDIztGN^^ozFud(t@;^g*TkuEkp(T,Z?' );

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
