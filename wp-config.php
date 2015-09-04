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
define('DB_NAME', 'cmb2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.S{U#_QMUO.hh@*219tfn<jJ()R:lx;DC-@m]&n_)WIp(-!]c`)!l7|Um&Gm!6GS');
define('SECURE_AUTH_KEY',  '/~sWk$&C$x9p4yZ@;&+jM9?5U(bV~snRaPu@wK1:ypNj$dtgxc^B$.25R^# d#q+');
define('LOGGED_IN_KEY',    '6csPG0(Q`a)>I9MUzK6|6)J+Lb]aHG6xbC`Dl#)3ymID)za=x3%CB+!UE/T%1>O3');
define('NONCE_KEY',        'Wd =tu63YPy*L0GeKK;JFzH4nN8pdJc;s==>A4x(s?v/~(|UQdWvh,=>PS}#)|mk');
define('AUTH_SALT',        'i8-nxE31PWZySC<cBU&c8 11IB@]YYz{GG+l_F+.!:4g?XOw_q *JFiQ2[r!EQJH');
define('SECURE_AUTH_SALT', 'XbnSXL/lbqgfJMO6Ru9k#XCh/@/kLo|$4%=0flxc)Zn5Hqf`HgGS/zbq/n4rcG6-');
define('LOGGED_IN_SALT',   '$e_t$=:f|x+vaZMi5uc?GVJ<OZ=T(l*7Ha)!!-+=?5&2t*H%4sb2t&*>]&{}Z4|I');
define('NONCE_SALT',       'etyyO=x)0NA0#p/{!~$+9vk4+:,Uy+O?Smu_j;l+Q UMHFif1|+ijw) |dQ9!qO`');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
