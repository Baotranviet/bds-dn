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
define( 'DB_NAME', 'bds-dn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@6D]%,C3E[lnEiD}<x9DSrq(CC:.@Gad[L60L:YWH:M9k0Y5D|eo/Y2ECW-|x(o7' );
define( 'SECURE_AUTH_KEY',  'PBu9l@tq0<HIT|@8y!gr,6[y2DX5DKHc{blfM_I&aG~m=3S}*LacSjVEwOb5aY;?' );
define( 'LOGGED_IN_KEY',    'ks(j@-XP>;y%EI2[gr2ykUA/Lvi1O8Pi%dkMM>`}h!t2CX1?6|zg_8].ms:<P:J=' );
define( 'NONCE_KEY',        'UsE|aqT>lCtna&Yg]7CiPX}DuUbrwvmju&KxOX/ho*/9`WO>sV]V~nLW)#),}79=' );
define( 'AUTH_SALT',        'n8vvC9m|SqHZ3x_O7.O7TL_GSoeixKR!Won,OhD|pz9|{NTc/:RS*|Sviia?lA7I' );
define( 'SECURE_AUTH_SALT', '?^{qc)C#|;BF+k0%Av8;4[3mQy-D9FYy@yh402=Cr[`Nvm_Da]Q:cupwuilvk!`)' );
define( 'LOGGED_IN_SALT',   '=;B@Q*>IO:^b>[dxG+Yy-Wn^}IA<,eV,(;_c]V*;FTw1=z~AlaKEmFq30Cu0W.?S' );
define( 'NONCE_SALT',       'REn#y]n^Aq4V*fhdMV#fE@}}aGtr$x>dLc]7<(?{5Ub(ZldgUQvD82CYJ3)/RJf|' );

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
