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
define('DB_NAME', 'proteingrot');

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
define('AUTH_KEY',         ']dj]X}l2[O&qqBVWqWRqaf{}@!Gh0pIkPZIj@._f9:&9.f 6 blZc!5(paUHP>&V');
define('SECURE_AUTH_KEY',  'qW$2JEw_D!Nv?o!N1gw8&/pgSzWO70xPt}[7j #6zT6u:>Vk@bHVdjV@h?q``Kix');
define('LOGGED_IN_KEY',    '/L<;b!a[JU`?H=-tT^fIe4m=51_[N?{k;iAXl>RASO_+KgN<5Ug73qq;W@x35ODl');
define('NONCE_KEY',        '`U2:wSvY:4#l8M>TM;5vjX2K3E)Dh?n}A!hnH1,df/[9!bex,Xdo0/5[]@bvZJp3');
define('AUTH_SALT',        '$}czA2J&#YUwGa$>I#f|dC*LyMZ?D[9$(mQ_^ihc*5gh|9Jr~?<iumsQ$(BUSQOk');
define('SECURE_AUTH_SALT', 'oo+jt=5tUCcauKc;1#~lBw~TbL.<6Rs$aDOovpC^ipoG%af214n*DPY`w-[#^1FO');
define('LOGGED_IN_SALT',   'Q84hBXN#ejM+^K?e.&z%4R7bg*kg^0>gA#LGna`B%*9GuxN{ ae><_&~<k#j3E.o');
define('NONCE_SALT',       ':jU{B`:Rz[!^@jLd&]xA*G=])wPpAP8)[ExjcYGNogOfOm.A(Ztt/^AxPWZOgMP`');

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
