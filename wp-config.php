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
define( 'DB_NAME', 'db_valverde' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2}%C-yQJ~QDG0Us&;(9xR!%49c@t@{,Z3&cSqu!j@77oBAOs%GbeBzd[J&`5FRkr' );
define( 'SECURE_AUTH_KEY',  'U#ljzv[t)kjA=xYeUZc=VZF]DBNz:,8i$]i0?W$gOI.wYO[jdJnDmS?A:4[y+*<1' );
define( 'LOGGED_IN_KEY',    ')pdFQ[Nd@fbaG00yRyWV01KBf!O:~Q[8Dmox*fJe}jkX%5vZx*tyIl1X(q4#}KO}' );
define( 'NONCE_KEY',        '*NzL~o90RKt0-b+D_^@BvQ:QIFu7FDu-is6Pq` 6/.:A0wm1 Cl3-K3YfM@[(u9%' );
define( 'AUTH_SALT',        'l+AhMmBdiq*4;1J?h)G/ROY 3^M0)Z3)/v%+<aFlZMv?^*kXzWE9-)El<[^0d*4K' );
define( 'SECURE_AUTH_SALT', '~ycafzNvuv9:/S<!,1*7d*q!D&A&ehrd<JY0a%J)-%(Bpw<jy<Um)))D/cue|Z&6' );
define( 'LOGGED_IN_SALT',   '9W>Vot2}JV-UP*q=D|NUhH47:T)B.;-zM5ty);|D.]cxjgk7uDI#}-m?odv#k=f1' );
define( 'NONCE_SALT',       '}X)VcBO(`!Fd2J4a6!_bfVRiyfP`f@DLoYhrF6@w *Et]?SN.{SNg,Pg2Mo-_.3[' );

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
