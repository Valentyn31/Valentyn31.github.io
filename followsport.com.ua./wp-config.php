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
define( 'DB_NAME', 'fs_bd' );

/** MySQL database username */
define( 'DB_USER', 'validol' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pvv_161718' );

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
define( 'AUTH_KEY',         'wB{W{Zf$ ;8.JNI,;*G/aDh+K~lk8>@HvZc`w>[PwS3jFCJBuWt5Qf8zCu2=)w>}' );
define( 'SECURE_AUTH_KEY',  '82_bxSA(B!)< 5Vp$1|6 5oK^&!(=}r&BKL8e/j; edPAF^+Nd1{Fb:ctjx.xAoG' );
define( 'LOGGED_IN_KEY',    '!lMIm$`nZt*w_>Hl/w a*{#BMpdOhu_sawu9Q>d;r6<}6%<k?%W[kh=K>n8b`~uC' );
define( 'NONCE_KEY',        'DP3g3h:rtj$$i:V>eb(su_RFTN%/gT:JEfCXpC95M?3.9Wg1n/jabmK~<JKfnnCW' );
define( 'AUTH_SALT',        'uvA0((F5S@uR9KpDv&}XE9izFjd@S(`K.Wwg@Gc7ziA:N.O!`(cu^8(#l~XtJOm6' );
define( 'SECURE_AUTH_SALT', '2i+K1j+u*w:h_,kN+S|z^ z(BzAZ196]RqGF?sBD?AXyDN+I6A*zM@dXhqcydpb6' );
define( 'LOGGED_IN_SALT',   'pOWu*iV[>Lhs7S4nW]KSz3K60>m+][ND<,-r-)ZFgW/{NQ<5E_}vr]:k c=etE6*' );
define( 'NONCE_SALT',       'T#=7eMmAdqi{<~b-}V#yN:/*FBUf)x12F|5@;oE+(6L[)v,vzT>%P]+2_%3g1Py$' );
define( 'FS_METHOD', 'direct' );

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
