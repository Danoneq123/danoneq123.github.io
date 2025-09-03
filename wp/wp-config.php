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
define( 'DB_NAME', 'm49717_WP' );

/** Database username */
define( 'DB_USER', 'm49717_Danoneq12' );

/** Database password */
define( 'DB_PASSWORD', 'Danoneq12' );

/** Database hostname */
define( 'DB_HOST', 'mysql.ct8.pl' );

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
define( 'AUTH_KEY',         '8TruUc0Ik8gP)M0_r3DGS|r4UMw*J[+iIeuASWb5*Y&S7hSa8J^i?t|19l$OF-[$' );
define( 'SECURE_AUTH_KEY',  '|Md8OKHCl|HPz$Nk(8R:t[`F&$PAY^U+N2W+bEB0wK3oBM[w9+is%+qm53nXh$*o' );
define( 'LOGGED_IN_KEY',    'rDSD/b$Ux{VO@<v^_kf7oh-0Q}^6[O f/!dy(Ddi,<WEocVV*bos`^^tBt!IFynE' );
define( 'NONCE_KEY',        '.:,z(l7taTXY@:XLm>fW,5INhveLwkhIXAkp.2<#2U!$jIW:=~MDSJ&}y}4N+<RT' );
define( 'AUTH_SALT',        'W?l>r@_.LRN`JoeUjEO@/;3NFd%#,xVvgmb{Y&AmQ%{uD6Jdg:3bQKn2+Yk->;}8' );
define( 'SECURE_AUTH_SALT', 'BD,b&A-B-0-pwqhP<~w*YQF$Y%%,+<+E]li/?1h}{wx[zv-j>EtR|Pp$)0B94CqI' );
define( 'LOGGED_IN_SALT',   '<s]*S|6bdyUL^ #x,J<x@`;1~`GBELE)0Nj!l,-kvp>}U;f_O-{x,3N!JL53]/:(' );
define( 'NONCE_SALT',       'lqMakwkqu d/b:^p[N1ua>&Q;6m{| n=8cP@&.a}-kU<S=*G2C8lC/1(E;g;hbjm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
