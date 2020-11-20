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
define( 'DB_NAME', 'mytheme' );

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
define( 'AUTH_KEY',         '$Bmhfg~nv|j}w9-?FZ{!su,~crTHxUv-n!ri5o~a8tIyHGts;[/g<r&+7~1uT &K' );
define( 'SECURE_AUTH_KEY',  ')UAzM9](Nc`m 9i(jgRQ 8gKBk&/g)306zlHB.,~4r+)llL!yYnyreM4jUAVKol^' );
define( 'LOGGED_IN_KEY',    '4:z--UsjpNNpY+gH5xrJ@,Anp=Cv{B/-T[IFAH$zn$XcQ|2Yi~O}Sa/*@J#OP?/v' );
define( 'NONCE_KEY',        '[e;XeynM{Qd}sRjZUy-u8aHsXP4j5%soW*z6]4 ,l&}8A$w6v1wy!,ncq?Zo>IEX' );
define( 'AUTH_SALT',        'hjn=*/Lql^pXaqp&~]&Fuc[>*~Xeky7sjO{v6v+xWZ:`>Sy2>/8iuv[r)2Yv]+!/' );
define( 'SECURE_AUTH_SALT', 'k8j}6,KCN#[d`:3FRw^w2h.Z?W^(AN>Oj&17Z_6*>9$t)^Y7`[?k70i!Ys e.qY[' );
define( 'LOGGED_IN_SALT',   'u~C$4+p` ZyyPKhByu(lps%Xqj1a&9%}_Hkg wJa|kqj-kxA3~x7i/}I1I-o @Sd' );
define( 'NONCE_SALT',       'xYl^XhHAVdioAusQ:e6#aYXT&bisbD?OqoS 8.fxoQ=di1(eg.;DCsW}:~LHRwsQ' );

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
