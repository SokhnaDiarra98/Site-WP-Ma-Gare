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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MaGare' );

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
define( 'AUTH_KEY',         'Sho2^@?d)(Pmk3lBY9M/0Ld1`3XF3&p):6%pw~.~AGZ2l./|4ZKn?:Z;$uqJBzh{' );
define( 'SECURE_AUTH_KEY',  '1rTci+NWK2m2HAq.60WUwpZB)j>b~:I*wTu3hIo@+=CP,olvg,lSK[!zsI,ySe:4' );
define( 'LOGGED_IN_KEY',    '=TY%tR^My1tXOOSa,5p6Aq=*WtPb>POJox3,XWc8&P #*}(|J!_M [/Gu4`]r1~|' );
define( 'NONCE_KEY',        'Fqxb@Z^tr#ncQLqYUHp2t(#rkgmL{lQKu8{imvB^:6AV w(0|fMM8;/dPZ vO^Y2' );
define( 'AUTH_SALT',        '~[!bpKf$@Q7/&.xyB GAn7pK[!O Q@x2(/*}~H~]h4Y#j%<,UADNo:Q8U<I+bSvB' );
define( 'SECURE_AUTH_SALT', 'O,5Z0P2tn)}6Fe[XZ)R}v9)kk0om<%@<ZMuz|X)jajF;v_nrhm0orQyX[!$Kt`}y' );
define( 'LOGGED_IN_SALT',   '8 hkAEK!3:^SAzb:S5A^v$]<n9ZTO>(oSTL%!Q/keRD6 -!}D4lNWE%8N4CGyQ~(' );
define( 'NONCE_SALT',       'j~;k/sUQP>S_ynf>yT%S}q >xfy+r*0GG[BjmAoxphvI,=FcsxH5zviDJkf1BSw3' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
