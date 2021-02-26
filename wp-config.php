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
define( 'DB_NAME', 'demostore' );

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
define( 'AUTH_KEY',         'o8!LFaC9=3@O-~4=]OpD;%0-*y$6ja4)2<={1~9PzgC0Kp.=>vt&2wYA$MM<#Y,4' );
define( 'SECURE_AUTH_KEY',  'BKlEi. (F_1L>owe5F}!se_8IsQ7J}sT!CT#HxQG8t!9~GtL}9@S1WB8d,rsF*MB' );
define( 'LOGGED_IN_KEY',    '!Un}ZA8-HSFMV*nAQ!X[];&g^B4{Ys&+)e@ozi Q+G-Ro?kZEE5,JH;zdHU@(DX[' );
define( 'NONCE_KEY',        'DIV;Y8)L~J0>POE@Xhi35+<-.X:;@NlQuLw%KV0*$,nl)k}ZRt3zX+cKsMzH.T5v' );
define( 'AUTH_SALT',        '9[:>vkjF;2!:7l)n;.?20]M]7~Jjt``t,P*)d|~U1.dh y_]`+@SZo^8[c]bo1g9' );
define( 'SECURE_AUTH_SALT', 'YnYm^bCV,;Ik?D-~6_V[6V>levYY ,$m{pwQr8L/SY6T%/L]]F2`x-[8P9Z+o9LC' );
define( 'LOGGED_IN_SALT',   ').^3&bNn|YoL5v2d[[c;ZU9-B1|)AK(POT+O.r]!~6m5HX:)L0RZ5PoZQ:F*yrtr' );
define( 'NONCE_SALT',       'pNUlv<CKEKV%-L1a/(QM,V3f(sZK]N@hEK$,D7P1T ~1/UYOx);Z:U/GORDYi0AM' );

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
