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
define('DB_NAME', 'tilt_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
	define('FS_METHOD', 'direct');
}

// define( 'COOKIE_DOMAIN', $_SERVER[ 'HTTP_HOST' ] );

// define( 'WP_ALLOW_MULTISITE', true );

// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', true);
// define('DOMAIN_CURRENT_SITE', 'tilt.dev');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E,qcIMZCpI9z::n<XLsv9=%$[R+$AC=.K#E=6`/^ky>+4s>}U0h$SF~25jr1XL~<');
define('SECURE_AUTH_KEY',  'NodP{IKtX+|I[{yrH-meOw5p%l&:mt_IR] nMmH=><--8Rj,a_;])/97R{D<yk5`');
define('LOGGED_IN_KEY',    '8k0&#Qe{9>+8;^aqq-V&N.4%,_**yz(h2B! QHbr[lwHz{e@8z)R>t-%PCa{)oC+');
define('NONCE_KEY',        'n,?t/otmqK2C>1kb{-HaA@`.Z#P~Z-s]U)ZnaEX@j4)h#n 9T0$rJWuP|Ea+<+hb');
define('AUTH_SALT',        '|sv4#+.vrT~6^+Id0G#bARbT!w~b7NDPLDQ+BA#|-OKT Wth;${[a#}w-t@Ji4:E');
define('SECURE_AUTH_SALT', '^*H=`xE{T}||NQtkx-Y*gz]r;SOx3cdW.]ym6gase%/+c2^9Q -$K?!C(qCD-XO-');
define('LOGGED_IN_SALT',   'omqzBKc4(exlqvWMFs,e>!grf/6iBo<L!?6;NI/IcBxuYDA%;9eP.b%5]=1yST(5');
define('NONCE_SALT',       ':D>WBdd7W. bX|N)*|e_Rdp(:,DBM-hO$+HG/w;.1-5yReMU}lD-4i{K!|iw&Acm');

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
