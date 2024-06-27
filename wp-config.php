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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hathanh_db' );

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
define( 'AUTH_KEY',         '=d_<(AT9IhL:(hO5@1v|ZhLc*|f$FaG1B)#u&!x3INkeP@/rC?vo)p[-l3*5Z BP' );
define( 'SECURE_AUTH_KEY',  '7]/=!@D:9^4N;uWi8,jP2Cdp8v6UxFYE;^UU%pfUIt6fsK^hGCw0X^>>w y&=_jq' );
define( 'LOGGED_IN_KEY',    'uDA$CacAcsj{_5`@#_}~Av7&8t;1A1sf3^T+lpy~JK_I$G:QE0|5BV`it+&Mo1UK' );
define( 'NONCE_KEY',        'g-PFk.Pdd?-H=g}z#ksSkT&3sA{$sMc8Xx_xPo&:+w2lDnYZ)[Wo n.?nvy[<`PS' );
define( 'AUTH_SALT',        '=UJA![MG<#e 7SiS?M$P*N|:!uH&15T*KV9Gx,1GV0t`De/{sZ7gU*Ycd;8Gt!@]' );
define( 'SECURE_AUTH_SALT', 'aG2H-@Eo41[Eelmr/0c}%{:{^FPpK6:;7vsHSYchj Qa^y1kv^-7<~s,A5<IK;$X' );
define( 'LOGGED_IN_SALT',   'sLM5Y)cdRL5!4 LHnuX5vim[:rBn>iSdT`|B1hH5P6{`(p6UtKBrFF|N#IUj1vzg' );
define( 'NONCE_SALT',       'af*u=j[(@OihP[IY3w1~D(nJzZm8!Tq0;}rJ6h_.UW/#RT}og;1>xaHNEnXR[%A^' );

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
