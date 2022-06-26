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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         '%~^uZgi8.zUMn.5h]Pj4{c!*ot7*[oU>bhW?,55..:^r3EGVe0]<K.{XL)J3/VhO' );
define( 'SECURE_AUTH_KEY',  'wPrz%1;,A0>15;QkuU.,z]R*znPeJL~*gh{PH++Pqcjm?=C])0Q`Fu~CQ*HulFLg' );
define( 'LOGGED_IN_KEY',    'Q+B.W!4t4Y[cYtA#qR5XC`k3]L3%?I)dI{oS)7 $s@~,<2Rn<4;?;1-|W2|CPzo{' );
define( 'NONCE_KEY',        ':{-Yt>_IQ7h5:#65NXPPdP(LiZeu PERjYOPOuOHv`&G;x;ogyyd,L@fn3D[=Az0' );
define( 'AUTH_SALT',        '04?1Zx%k#a8os98mBInQ&4c*cD^bop*xq;e8LMXwRc16ON[_Vh%Kb2Pq(4* Ofa6' );
define( 'SECURE_AUTH_SALT', '!;h[`o2;Lib}Crh_U>NU+ML(,=5<ED4b4Ha;vB!Z1`oILp;-Xwks[svy`V;?KDdh' );
define( 'LOGGED_IN_SALT',   'F3wU[W@BY(kI8_r-M>,G0K+FpF*|Vm$up;={w[3-9=uq(Gcwn;NFuz5?lbLE5>Vc' );
define( 'NONCE_SALT',       'rxTW`?,K}6J.[s^~I^@R:r3:[v<cW/zf<{YMMkZ)!zbB=DT55`c;R~Q/0a]~u],9' );

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
