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
define( 'DB_NAME', 'healthcare' );

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
define( 'AUTH_KEY',         'rhi4=%lbS!oZhH!u8$=;n^m+ke$(Osr3to3~TgA,X!v>=g_=l4%;f-))j3 L=(l5' );
define( 'SECURE_AUTH_KEY',  'wpZH-X/RrI9oPva;o:Df`oYUwY#[ExyiRyNvA]7frxuB-oqp5H,G ods_#}pMF?V' );
define( 'LOGGED_IN_KEY',    '8yrJ8A{&`1Ztt`zN6r1zZ5fbx CBd<E3,mTm&;?<[ln=]A;Cl#EyRA@Skp1yb[O]' );
define( 'NONCE_KEY',        't?5-nz7MHW&*EYsT><twJv(S&5}|N P4vDjO4<?0}HiAc1|],5XzYw1?KRYcm*t;' );
define( 'AUTH_SALT',        'tc8+t40et9B8.&`upRG1Fj5>r|v3R4Rt*wuoG }DNA@puvagL&Xb/wV~ *+^A=kO' );
define( 'SECURE_AUTH_SALT', '?v,|KuJQ2p3jM/`Rk72?wu@Fay%rKc/!@ CE]becEd&uK2~)u)49SF6HoABh#nYF' );
define( 'LOGGED_IN_SALT',   '*^vqI2#?Dg1+nGx1Nb9LxB3}.//-0&CQ>qu>/P!wc]tj7Mu*?6{o.[^[1$;1Xp5q' );
define( 'NONCE_SALT',       'qgG@.5@p29/WbLse0!M>/|n1xjic9M&~QxzX;.D4rs;8I!D8w#Q)waY1SIK!G[3?' );

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
