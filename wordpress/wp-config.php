<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hco');

/** MySQL database username */
define('DB_USER', 'lmt');

/** MySQL database password */
define('DB_PASSWORD', 'lmtmaster');

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
define('AUTH_KEY',         'EknUaa_M`e|#:l&I@+Ma^)qWuv)K4q?H!,9[qY+l}[ q0Mbs?qzuo|Ak.{J,L~1(');
define('SECURE_AUTH_KEY',  '.Q5zHF0[x<C1P4d,Tngr0mJK S^),}1+|Peb?^d8#8#Sz*/wGvf(jQ#|tM^t4stZ');
define('LOGGED_IN_KEY',    '_yWfH[PH(N&K+4&tlw.Zi_,Iwm5A-H6dJM@$g9ZO(|dY k`,7-DEwn-#u-%F[@Zr');
define('NONCE_KEY',        'SSXKJ9x/pjoa5?-2mTTng1S8O9nlvq lfeG7JwhcM ^3#aGy=$y&F-#RV5cUw8-v');
define('AUTH_SALT',        'yy(}g.#bPFjn=$XB>]EQiOU5Z.m!F/-UZ0C8N%|s)1|/7c|2.e-e-y12W0[(H,U;');
define('SECURE_AUTH_SALT', 'e2BSj|acJ>a1C)ck:vQho}+RB]Gz|.F{i^O2 *1 -.,Z.B,EMQ;AQk-R7-lDEEp{');
define('LOGGED_IN_SALT',   'l)Pgzy{px.^g=@aiZclPP@Ag/2k-=7kUDo{3^K4ld,,+wX80f9d/elm?S+8BY`s+');
define('NONCE_SALT',       'b}Q|tz0:,S_)*gc$&-TMS~>+}:,s+|r2125EotOfiUe-9HT.RFUVvY@{q_8^v=BS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
