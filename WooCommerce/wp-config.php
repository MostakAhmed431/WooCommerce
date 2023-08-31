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
define( 'DB_NAME', 'WooCommerce product variation' );

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
define( 'AUTH_KEY',         'eD`!=SwNU6mrw1-u%R$>z66PHhn%kq{&PPz&,-.8hX)S1uTh~T=^47R3gC_qI9!`' );
define( 'SECURE_AUTH_KEY',  'e[W]XY9pC&c<lt..D_4^^7>fBCm=UJ&7eLTbn4{v{>X:C#jv_FBvH;I6I)zZ.)4v' );
define( 'LOGGED_IN_KEY',    'yX0HqkgwNNS%~(wGObJn^wr]H%?c5.zOP;a2L!V?bUB$^g+k6[?5)33pG[2y1Qr[' );
define( 'NONCE_KEY',        '1[BxXrg:Y,Q}6KC%*+J#^N,*3T 9I)NV54yUz/Hzg(xt^C61/GE8n!Mz91EEA0r~' );
define( 'AUTH_SALT',        'a+C9(o`_s?4+nCe2&Upu,1x!U>Se rq9iCSwsP[>u)`!fN1<>RtZAZh#7B8>Uq}:' );
define( 'SECURE_AUTH_SALT', 'TnZg)uFa:uq8xoeK&]yQZEp*CTv4e)6lRsLk]`%(B5>)^5 0hOfd9QuIGFFt>|pv' );
define( 'LOGGED_IN_SALT',   '?#T*o~Nz}HY-r@M*I/U$t!3(PC)=Dz.2-UV`*[)X-e~$z5#Ezs}Mjd!2CzhOA9j#' );
define( 'NONCE_SALT',       'UVxc>jeh9R$aq5ZigJ%bF q||1K^=TvPPYthL%],Q[-(gz[6QA]0*-zc> 3RVCqy' );

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
