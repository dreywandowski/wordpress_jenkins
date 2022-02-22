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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '000Seun-' );

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
define( 'AUTH_KEY',         'aK*P%+Zq=IItVqW(!* /%e`Ju,9P3WR~4OgUNFtNp@:xPNH,wR1=`Jn@{r,RKT4F' );
define( 'SECURE_AUTH_KEY',  ':}x*q>C6l*X,B$f`tv{|r!]w`R`@J,n{LXG:8QG>}NN<h:r8ZN}lG$gLX/0m}tk#' );
define( 'LOGGED_IN_KEY',    's-H8$vwJh_&W#CfBAIi9{z-?l~K-wl~*OOHk,13hW)PHaQx=_L6pWlG(,V:U.|--' );
define( 'NONCE_KEY',        'n8+M/2?aju(SCO~{:yK(j;ceS/ZKZ,j[_[EFi3=LCkWb|ew: pH9T5dT<Und=l/.' );
define( 'AUTH_SALT',        'vjKwxQrkOJ_;49kfH;h~u9,e&K8:1h/%7!7j[aCVI>SvT/kMtPrD71e0(9FEfa_]' );
define( 'SECURE_AUTH_SALT', ',mFS%W9^)bAk`k*_+DR!bojrsZO*d:3]FbCy7/6GP&yR+u?oY?i!70Cc&O@Kp$1h' );
define( 'LOGGED_IN_SALT',   ':DPy2M8,Y2Z>V/ehy(mc+!5(a%iBBnbnwZTxBkqEI-%fbcrF.MiF3}vbKb)&e~q&' );
define( 'NONCE_SALT',       '@msI}7>#Nt-f=)`B%kesIq +nmzHfWC<YJ})%HtBG|5U(kWhG7#zFq8G!r!qF^u.' );

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
