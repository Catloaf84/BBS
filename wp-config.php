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
define( 'DB_NAME', 'BBS' );

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
define( 'AUTH_KEY',         'f}adS$X Z[$;ZN}&KE0r0G@`^w,{r]N`0{NVx}B<ZGy~.JO5)b:z@*xV3xIFs{VW' );
define( 'SECURE_AUTH_KEY',  'g.mfy<$h2Nwx1{2?aPWvu9lL$hYpK*mx(lW3eg</FciYSY[hHWm,wZ`Ddn:& c`s' );
define( 'LOGGED_IN_KEY',    'iGL^ OWR{?zAiKCnB=8Hz7}eju~%N5Cya`]=Tog8HTbiAGRr!xmbN`wHhrwmtG0.' );
define( 'NONCE_KEY',        'dtXS<7Y/_ALxhbXlI~#[O1 P.17;~X$C$ca=yEXf6+eQV6X-Sqc6.%pfl^h1$3|o' );
define( 'AUTH_SALT',        'yOiZ4:(b#I|pnG<*;xmF,n+fEK/az*^T(2y>,|Q+%z*mJXq9G:g#0~I~o 3N/|:5' );
define( 'SECURE_AUTH_SALT', '1/OvT!xWE6<Ba?Xg_VZ{&y#-xdPD92-HVa&mWGT~>6K4f.D>a%G@xbfOGt90<wI6' );
define( 'LOGGED_IN_SALT',   'pExS BI:>;o,KNu%#t%W,)=*hf7Z6Xg&PP0EV`FDc_k%^MTPu(!C&9%`psNLB`. ' );
define( 'NONCE_SALT',       'Cm|sK-a0$ir7~7yUkBtu-cG7aZ3m%WT6vL,)I}W|wnQe<M,VY;oL{Wk?cL-kUK,x' );

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
