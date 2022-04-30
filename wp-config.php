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
define( 'AUTH_KEY',         '_.;=YMM_<.mYtQ{FI@Z]/8(}]FB{6wwQ{bR`M<ub)c8f$4GVo1i~FU,q}xBvwR]s' );
define( 'SECURE_AUTH_KEY',  'h]iUl Ukoao31hc`PfxsGcx&}0A7Tr|P?- =>W30j%Px&Y`|b< A/WP;%$Sx9:4:' );
define( 'LOGGED_IN_KEY',    'Mv`SI,8b@DN )~ Mim2a5g,ZYGIDOqE)U_-aB*+-*Zyz7a23}/#oI$dek8+gA9~T' );
define( 'NONCE_KEY',        '[wNM0$1G3Ep40ERV3HpT_w|Pa$0I[nmJ3nm12vEG?C:wn@sKVmeU(!A5oXwg-xwm' );
define( 'AUTH_SALT',        'd=>H%9yf:idW#ifK:3Bb4I-[p-D<oHdEsG~o5ic?}=N|CfT)[;[*/h+hg62i*k;r' );
define( 'SECURE_AUTH_SALT', 'B!_th3JaVx$tDFcZ!;h80{j0Wk>Q+Gy96<D(UJ{Tg7$B;DJg^u9E]WY6~(OZ@W9`' );
define( 'LOGGED_IN_SALT',   '`lGYuEQlryn? oPXrnR|D1gXO6`T_o!5s;nRq9$o]LFul.Bn=iMzcB:4U%hqj0y@' );
define( 'NONCE_SALT',       'QJwHY4FH+~Y<Cw^{l[UzbNl&Z]->etsY1yqho|7`p)#dRSRD7jbVqF=E=xa*cr)J' );

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
