<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'studyhub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'p&Ti0|KVVKEi,hdvo>u+u-+r,B-E<?haN79<>d~Wh|54Ok?l4v7$Nq0]h4~)/.+3');
define('SECURE_AUTH_KEY',  'X54BMv|$?RS2,.e!imc@Rn|R+qj]0r2DBB~jWKAdp.#U<iK/]u+ehTA![#qx|qP,');
define('LOGGED_IN_KEY',    '-(-6Q:J(8!7.PZq5Y-uz!xlQR-p hL2. A>^$=I$gOaQyy:7gO+TlgF83Z-#<GS#');
define('NONCE_KEY',        '.mf(+=^Uf&-bA0%kjB4=D1.;ab&YCb@1Gl/kRoCEtu,0Gaar|xC&iYNc?hR#!&2,');
define('AUTH_SALT',        'g,}%@/U0G{0h9*(3dXVSL!zi|#a{l/|CBge}O$]:RFIg5@lb@U]b|r<rH/Sib85+');
define('SECURE_AUTH_SALT', '9J);TJoq5H#P!u7fJq-|!#m7!ja}EeLS. F{<6:1y:4 g-CR+o5o1W$TY[RdRYN{');
define('LOGGED_IN_SALT',   'QwrFr/W}=2]cEqvb@b&0[VDsk}u4%f6AM.k-jR;W3KW}iX0u6M>&ISW<`x91 xuX');
define('NONCE_SALT',       'M78=VH.Y|fb|rm_*ANYm8Z{mR8A4rH0PHQ>V||DZ/7]bV,iYcqPy!6@yAJ,:s7 E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sthub_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
