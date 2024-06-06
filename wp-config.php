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
define( 'DB_NAME', 'dbflatsome' );

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
define( 'AUTH_KEY',         'V6;aScHS:t(J|.xotgCdkSJ(eGOuX0I-PoO+VcpQiO&8UkGat=|IB?&&(+I__q*q' );
define( 'SECURE_AUTH_KEY',  'WqXlQyvi=:f=0(o<Wn<g90hmAwW#Eg=Lq<&5`0F.m i*N}$4Wau.{*bv]A>.07o?' );
define( 'LOGGED_IN_KEY',    'VN7;q$Afg%|NSz`lK4z2)#CghW3#5|,5lfR#*i(5X2[j^*qJZoHOExaJitLUE#x~' );
define( 'NONCE_KEY',        '&DgL@ Tk=G|-GU)W~wX^;p/VUF:.#}BsNc>#%!s*iG5aIHa`Xz;yt@0lN[{FuMag' );
define( 'AUTH_SALT',        'pNgh}h1VuljNl<jE+mO}:;8$38sfP)NkhinNZ 5fw9!!RB CzTEEWVL}!03Un/:M' );
define( 'SECURE_AUTH_SALT', '<$]2=t;($vV1tGGB5UAzg-#S 2wZuz~D&]OvyCQZ+]OI$0J0hWBVl-d<lUP*x54Z' );
define( 'LOGGED_IN_SALT',   'A6&pbu&Q$K|Ade9p@K<GS#E(J@+2L]su?pg`HnAm<PaZ3rI)l2;[%_cc>S?A/{}+' );
define( 'NONCE_SALT',       'Dt&NNws LP<^Kx{t0]t5Q,:;uun;w~QW7OVA/:6,f-4y@HK.h>W^B:=.qL7!+=2H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
