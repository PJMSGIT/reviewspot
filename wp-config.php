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
define( 'DB_NAME', 'reviewspotDB' );

/** Database username */
define( 'DB_USER', 'reviewspotAdmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'KOYXdET[W*;UC{)[B~.!dx@F*qmv(E -~<Obs.Z&/-:sw9EKO=rU EDINI~d@%~V' );
define( 'SECURE_AUTH_KEY',  'Yh*]xkigA6&LN/:lB@}@JI_RD0lHPQ><j8,mj#`Kv[0c/92@[@GTWVPNQh&[]2Q|' );
define( 'LOGGED_IN_KEY',    '<h[9j @y#F:WUUcg>JtGosYOV?Ws^gj)uH8;K4^OVuwosPZPNbH_&9`&bPAgLJ.&' );
define( 'NONCE_KEY',        ':MV;YhX+?il?si.p),-DkV#{{Tn|{EeM9jDgbY[x;J@;S# b)Nf<,5 ^ea3PI`Vp' );
define( 'AUTH_SALT',        '%e/t/]K6!3FsoN#uKf68E?<3e5.:[EdWfEgm)d9nPHr-&i!3tkaXQ%vfs^1Arw7a' );
define( 'SECURE_AUTH_SALT', 'n2TkL$(yLe3<N;mS=VshWe+FvEt/7!oe&@eVj:l.~;8~L(]TfB:ANW r4b;{+LzF' );
define( 'LOGGED_IN_SALT',   'o`>f6=N?^H8i8@3]h)I<U$`1n]Kq% <oKx!aZ({J2/w|IECn4i~(F;`W23G+/bg@' );
define( 'NONCE_SALT',       'YiDnP_hPJZ%geMFI-z{%C5NKHbJ*$dY0UmGd[qdYzd`3IbV[aSan.R61|-?OVk6P' );

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
