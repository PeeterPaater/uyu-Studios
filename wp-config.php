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
define( 'DB_NAME', 'uyu-Studios' );

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
define( 'AUTH_KEY',         ':~}SNcTfgr7 =a8bI!)qkja9rDD%j,zRok( /3vq}ZXRwA$R(|Zg)1*.Gvzr?%I&' );
define( 'SECURE_AUTH_KEY',  '{>O Q:rM!VP+Ynkd>aSZ)>U.qm3Pq;nEF+yiK?;0$4]L,l8|/FlK,z9{B~B<00z5' );
define( 'LOGGED_IN_KEY',    '? R=@WjQJ`T;0)wL_2ralIL|&f[6+ KofA+%:GiSw;d}7-,]Orxcz+V([x BgcO=' );
define( 'NONCE_KEY',        'z3kK!{m>%9..[D6<p`L2K<v;33TJwRM5?Lu2eY^^js_YDz-4ZDYf7>Iz dD^h4[f' );
define( 'AUTH_SALT',        '_?+wxkc&4#rU|!#hfHJD4F)@_BtpV{hYF ?M3g+O0J^Y9rngQ6L&+]YGG;]KVWNg' );
define( 'SECURE_AUTH_SALT', '`c8u2jR2(a2flMN<gM*gsZ](A-P(wb%?e+#GJIBV#lI.QlEbAe5SRuG/ooAx  w`' );
define( 'LOGGED_IN_SALT',   '(R EaQ/CF2!XQs=M|I+wFI!~e=9[u3J|tv}Gj^T7v;wc@oeN {PXV:FQr,iO8LXN' );
define( 'NONCE_SALT',       'a$sYfEnLB30%Vjb/r1l[bjd V6=z&5tr~S-e-5=nIXKUd~o{l0}9:Rb B{XW_d8X' );

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
