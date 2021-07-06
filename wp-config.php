<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Royalpotters' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')Y9~{VFR(*9T2IW+TGA/wNP;}fe})S+,LQ=7sF>/?caX^nfy&KLb5lrdUjxZ{el_' );
define( 'SECURE_AUTH_KEY',  'CAW8$hv10E#wBZAMW3G-aM}Jz^NvQ7 !dX}R6{(d<$k;|(NL#Ha6x)e+*}BN?.2=' );
define( 'LOGGED_IN_KEY',    '%I1eaMo+8VS)q6QQHDA4}+P  ED7v25+[ >{rb)}5X1DD<RygN{b:~l?Cnb^.6E-' );
define( 'NONCE_KEY',        'lIH~g[~6%,D(.QIS7w<(MvH4,:$(2,rWYWA _N:thU--nX=o{w& v/+>tUVa0v>z' );
define( 'AUTH_SALT',        '&6XF8c:aS7dop0JsY6#|d^y]m3qrgDSIV%rf|G_R|R8+!n`xedf,EnA!32LVRt*`' );
define( 'SECURE_AUTH_SALT', 'O:G0er4CL>=hsRl,XviO7%P$`Fet/&PkVKl]DzxNb-h0(O!}b^!crg&gDC!4+)@:' );
define( 'LOGGED_IN_SALT',   '7K^pz4K6o=I.zxCOtgl^4eMd0]h>5(&L3;0:/aPJ+soVYYfxyup1?0kQ|&.t{+!0' );
define( 'NONCE_SALT',       'nwzyI4?wVf%k.MY;_+xX0331PbT>BmnKH@O479woRKtnP<i8 ZAhZ!U;&]E-,4!5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
