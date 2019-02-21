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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'student');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rafa2112');

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
define('AUTH_KEY',         '-s@GvJH}Xb_q#m|~1Ch?]Z.r?*1wHY>.(hnFd;F/Z!W.?AB?W&i]S0;Ili1L[Axt');
define('SECURE_AUTH_KEY',  'sll^tYPyQjJ04z|jorlz(k6Nd2,X9w[oo>CZW$4+M?ogM}QM}OgR] U`fQMSGwF)');
define('LOGGED_IN_KEY',    'W@T|)+z9xy9e1?^3hlPhaq~jcI}{Z$)@<}n=PfM{!h-N_B[sz@rq`O96v;6cUx!X');
define('NONCE_KEY',        'q2g`E`%5:<^3}</5tJG^V-4M7N.M%3Y>&Av Vi+M7]>e24z>w.0oNAaEFh/2ecT?');
define('AUTH_SALT',        '1AMT]VSJfSKL 0fP=l)]^4V(!ZH?2 [>.xz>D;]TwI{ /kuE7+X~w@Za8AyQJFFB');
define('SECURE_AUTH_SALT', '&E<4TL%S)gPS+S&/8$@-WV;+h[_Gt(CEP2Bq4oW+HZx:tcDOVeua_M& ^ba4G0/i');
define('LOGGED_IN_SALT',   '%SKgg/xWon8()t[+a];&~#Z/lCL?zDzSa,z-muoSblvP-t9{sZ.W@liAOFOr:dO3');
define('NONCE_SALT',       'Z5`yq[.-=O (=Vxc(%RkM3Nw6yy@iHN(1!]r@t50Oswr7*qUG&,Gym;4~R7[KQ*:');

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