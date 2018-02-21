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
define('DB_NAME', 'arfen_testWP');

/** MySQL database username */
define('DB_USER', 'arfen_testWP');

/** MySQL database password */
define('DB_PASSWORD', '1pmZphnt');

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
define('AUTH_KEY',         'cMQgZ1@IA7}{M{ko+uRI8kRFWcSE`Y8v!v##Z1TvgP44gM(Dg| wFAAH.xC]wKfC');
define('SECURE_AUTH_KEY',  'sVNNWolyyC1|G}_.+fIF<dF(t:-.[<,7~O9T65Nf2mfX>x_1@:!^JF7F8h[gMY8 ');
define('LOGGED_IN_KEY',    '[5OV+ubi%OyF/[k(h>FIUgmAFu)Yt{+|yW(jv~V}sSwbOcLh^HMr>UZDxGk)`XE-');
define('NONCE_KEY',        '<arG>WwA:H^Heq&$t4N)0Io}qQr>5F:a{;mZ6-p{x0Pm0|[jW(*mvSK~8U__zk`-');
define('AUTH_SALT',        ';Gn1gO_3.x:s!VJ5V32b= ^Wq%PM]bB&OeRa(%FR7M[$2aP]X!|5/nz|]6c;mcj=');
define('SECURE_AUTH_SALT', 'S8,,504K!e_Ra4+Sui%&IC}I?q;*95=J};Rk4/W5Q#c+$nX]x(1+T$c=YFR@&^T%');
define('LOGGED_IN_SALT',   '`?rG!!`tt!Snqv7~%:X(T~j[_d;$*$d50^quK4C>VEN&-,Pq 16g7] iG*.fvY*#');
define('NONCE_SALT',       'g^eS!^EPwArFU}u]{ZW`~p B?VN=O<eGJ!oM2;v9u~g.yP|)`!`@Ioru3u#f<<qR');

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
