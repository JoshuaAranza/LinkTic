<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u791635985_MRQ8Y' );

/** Database username */
define( 'DB_USER', 'u791635985_vwCCk' );

/** Database password */
define( 'DB_PASSWORD', '0niMCoqWpB' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yz?&-rh?t)o>fy&&3UTfX]DJfh}$8LF 7D@[!%VS7yhpKA.!72 dX#4C 5P`,-:h' );
define( 'SECURE_AUTH_KEY',   'lJRVmjx(kKp{Am`ZoR@w1dx!FuIw~}_bz@F4H{s6>O9cf5dGwIUG*&C#_0Tckcvp' );
define( 'LOGGED_IN_KEY',     '^iJolq[&W*{W1$$IYM5?{IX5FK-,&VM|aztOu7d M]|k9u^3R!Z6 o6jUBYd88&~' );
define( 'NONCE_KEY',         'uNte$T6akR:_5=I8,Yz14X&@(t?[*o<nw1,h;-9W6y&`iNFnlAz[+3VUBG~qX{nt' );
define( 'AUTH_SALT',         'OH0Cxb@TnqoS0-_u_/meJU(P#)7:j]N1Um[0:DNDJ&K8f3Gp~p(|Y[vq4M?A) 9R' );
define( 'SECURE_AUTH_SALT',  'vwfh40-d:>]!9Wvez8(-~}hTym@]zu[:N9Tmo0tMH)PW2IEM[RjKFtMlW 2V`P~x' );
define( 'LOGGED_IN_SALT',    'XO^Jdsa%b`#RjUK~Q,~VAh=<Tr3T{cg}IUCn|G:CW7Vfr+8:wV~-Zl2[ @ZE3.8,' );
define( 'NONCE_SALT',        '}H8CJ;a9$Ad@w,1}}Wm%A[LW([k:Lpqh~R/%db}Z>?.uKn`@{axTex!lRfy$MK:%' );
define( 'WP_CACHE_KEY_SALT', 'A%>uq,2=IE+jM9%$r(Uy,G@k;Qx-W;wE#xCVOpI)ZEaM<s:f9[1 2|I?ZSKy3(D>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '679c34202185fb0109d90f058e1768a9' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
