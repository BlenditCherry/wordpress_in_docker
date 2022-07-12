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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '7j^3`z<Tiug$oM#j$0yHsjVBa=( ;]00z<$h:%Lq`:u!,h1S^8,>4(9X/f]PgjWq' );
define( 'SECURE_AUTH_KEY',  '#ZBxkKyNV[Tx;XEDCtO^}d6[qEMS(x}x}4DxrQKC{4h>t|-59DR][:w9<VD-aLC]' );
define( 'LOGGED_IN_KEY',    'rmIZQ;*b[6T6cC!`=G+Mvgwq%A)KXqL2)f:Cig4Ynzf7=@Q~~<X9W@5BT&OtnT#F' );
define( 'NONCE_KEY',        'FG;h,Y+[Pd,((|#F^+)Z:o*7S.,u Br%ozzWrcme3RCx%(VyyF3`VS(805dY%/Ep' );
define( 'AUTH_SALT',        '?Bi3CGdoX=%dyz-g/3Z)#$pcU$ud#tiW%uLT/D)5_X)N(`>x5V?aAg3`/cpn9u`l' );
define( 'SECURE_AUTH_SALT', 'G;+(rHki9H<hNd,A7%663]JT`hAhm)cFi%A-Wg9Kp^++|zWnd3jrOyPlxfwn>=?3' );
define( 'LOGGED_IN_SALT',   'h:?gJgt8(wEx}!}IBu#&g/X<MXn,/<i._d.NK/A0nVji]-5[~5,JV6hvAspv#h*/' );
define( 'NONCE_SALT',       '(.]y}Z28LKx[FP{MU,.w~70p|`cA*p2~Kd6e>3S]-tw^F<unR,j)]V^Y!p>!3<kM' );

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
