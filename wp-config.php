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
define( 'DB_NAME', 'mgourmand' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1S?:l?v>I}gh./~SPCQZU7N()^TrnJ``:s*KH x@h=Ql4Zh;M?8}[xW8 ]w96]:]' );
define( 'SECURE_AUTH_KEY',  'b/2~uP7Me4Eq@zGaJez)4t6s@>B86WxVL992YRw9;nkGl#CBA%#?i=rs `^7DuoY' );
define( 'LOGGED_IN_KEY',    '8sJk>ob}2[rBE$<3nz$s6kz&t.!f2m#>2sMnQNEb~Dcm|oCBGZL~29)5_ORG;4*m' );
define( 'NONCE_KEY',        '}5;$t|oou^#G%,$yoB5qXH9TY8T<t%{a9tl,f?%Mq`w/!?4!r>~cy:%#J@G_X+?x' );
define( 'AUTH_SALT',        'IWQV/6T).b>]6dga]$e9Rcn$gy:u9K22h#94.G!?%a;Y`:qk@x4?x`:lu|ESrG_+' );
define( 'SECURE_AUTH_SALT', '[Ygd<wwz/3@s]>CIN1Hd9!V <3(0f3~Tv$pzDu<vG,s&_H[{[d#P&tKLEb+n/${P' );
define( 'LOGGED_IN_SALT',   'fzTqS#Bz4L>flD%,?@1#g+p<R 3v^soiU8{RVan0~JJ8KF_GYTmaFHt#}fuN8b|B' );
define( 'NONCE_SALT',       'HxN+F0WAngD9XWb:SN_8WB.fT4uKCGQNWCR7_pfD7c6qzOpVEMA!@jlFidz X3W9' );

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
