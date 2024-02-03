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
define( 'DB_NAME', 'portfolio2' );

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
define( 'AUTH_KEY',         '|q@,EfYT6Udk(8F(/HF=./HRSu!*|cO(LM!f^.}P*K$i/9x)W;EDTYw+f34B:|]e' );
define( 'SECURE_AUTH_KEY',  '|#)9`vD(V%.~E[(*+|]}f3IusbLZ,!1Muzy/E?g5Ty+paQsve11h$q=6*EzCd;(B' );
define( 'LOGGED_IN_KEY',    '*]i5EhT(L4G:wWuyh Ur_ F0jGyAkryLdJbfkq71[uNi?^zbkn5/kaH(HqCyXq4j' );
define( 'NONCE_KEY',        'l,a.DZQp^A{&B4t=*13xQ?]3jr4<`!uwdI^SQ_YJ o^FC+htQBE|Yo].dP)hF+Zv' );
define( 'AUTH_SALT',        '2H3/F~6rHn9w>V70`LOw.74!vk[{Mtq=1fU0_MR:7o?*EW,NOQmTI(>9a;$R%!Bh' );
define( 'SECURE_AUTH_SALT', '4Y.krEZ/dy;VYD[/sRHs*QM1[t<<#B;~F@Y+gNg=o_Zz]y+B j*;dY*zjXO?HIn%' );
define( 'LOGGED_IN_SALT',   '>+)W#>n)K/5b.k2YISo/2sK@I*!-jc.-eng{@f{u+rb_UnJ=94u[8uK+&FV]#z[%' );
define( 'NONCE_SALT',       'z{JWGHgkPU(G^^7g<A@[A%si}5-~.hN6zo8@04Bc.Gt+CBEVB%Bt|>fX3k/?U*i~' );

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
