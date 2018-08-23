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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'business1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0Z{%^54ou^V4ko>6| g@u# hY!iH4_A|tuX~-o-y6OL,!4mOH.: >J82Bs&*9H9C');
define('SECURE_AUTH_KEY',  'u2;6z#sD_9~Xr1MNL$9r43If~I:CsOf% RN-DwcEn!reuPof3K!L?BJ;s4UQLGuJ');
define('LOGGED_IN_KEY',    'pnN[N0mZM?@L~c@v8z!w>f/0&dVu3=]o.-QO,pmgO|FhWll#=/g}gGN|8sC^NWe%');
define('NONCE_KEY',        'rLb877}}lIu1+xnBJ<,pF0]4|<9_>J%atRArx_#Zi}|LF8PaWhhz4=]~`BX{e/bC');
define('AUTH_SALT',        'm$/G^ CIE[nU+g,vq@dn3:[aw_,tQR-rh5B,$0n-l`p|D^s(HW;ZMno?Z[^9|x`?');
define('SECURE_AUTH_SALT', ';ILQo|J{uC94(>!q6&SrgS~?<}Q|g&JG)5v]!)x@9|wtxmt(Y&_lCMbXl_}D6^ts');
define('LOGGED_IN_SALT',   '5CFFZql6:a3,x.66@=ajQe7f*r^m&N;8L4.YDMwXyUpaC[rB9x8bOy]?*{Mjk-xU');
define('NONCE_SALT',       'jF:,/c;>quX78SFV%5ge3LD>j*6|Psj)F[~$Lk??I!xqRy6_,.5.wwGZDgqv|}[w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
