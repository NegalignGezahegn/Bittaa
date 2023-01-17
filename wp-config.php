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
define( 'DB_NAME', 'ejensi_bittaa' );

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
define( 'AUTH_KEY',         'WUjF~p%~x~0^zA-u{qJJ]+hm81R-BA82+ Z&OcD-!k-Se90Ga:i<R)zYzV$?|bu8' );
define( 'SECURE_AUTH_KEY',  'aR_Tf7gX?VXd42T${7t#WShP>s$Eq3^[mmHg`L54bOR1jRErvQ6%{=Tm[u9QP]m5' );
define( 'LOGGED_IN_KEY',    'Vvwv1 u4^[.$~8NN*Fh8a|DNTWh@FxV!5Zzp`}cDZTCB]Bk}5dJ?8mHH;%,vAX(v' );
define( 'NONCE_KEY',        'L&EA`jOvzlc>NfxOZL>zLLsD.qwV319Wm484o1R-?N7fnvm`Aqn._^EV)RA:F3#s' );
define( 'AUTH_SALT',        'NolVdH^F^{fGu!p1TUgzKIn!RJ>(>-[Dp0_uoQ)RyfHQ43@)^_l!+(6v[ )[d;At' );
define( 'SECURE_AUTH_SALT', '3S#hNhy-/Wra^l5@G?h?vDwHL{!h1q*][/S0FiGXR^df-SO_}YZ~<iO8f<[mY<bQ' );
define( 'LOGGED_IN_SALT',   '+nr[bRS))C!.^T;5-rUc[K[y%fd2l4NA(eaBj]T+y-gXEiUDsG3zWz YG5#hGKNW' );
define( 'NONCE_SALT',       'R#BDP65:z_`r6~.BBz,LE7uUF.5r6VQr8bHfx?at&tr?]endjayMz7v$3;T<Z-[}' );

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
