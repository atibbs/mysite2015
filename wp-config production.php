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
define('DB_NAME', 'andrewti_portfolio2015');

/** MySQL database username */
define('DB_USER', 'andrewti_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Ex2sMBsBkMKdY9');

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
define('AUTH_KEY',         'S{cBlT{|Z+y)|$ ;e3/lF?Jt5sWnxMfIII9+;U;Ekv||<CP&+{BI+loO#9|!s%$`');
define('SECURE_AUTH_KEY',  'Z=MyB+jHc8Zc[AoLGF9e6+u-|UKL%_Hp:UTp{)%,><F!/qcEipdzu9u;.>(z|VH+');
define('LOGGED_IN_KEY',    'H^A0bv}Q=({1|v%W=+`E%fokE2:>o>yO&*<{!SZ7hS8o8,&JvSJFhweYVM9djn+O');
define('NONCE_KEY',        '*eR$<E@77^!r%&Ci*+,-16u+vxgsiN)m-fe,hS E!cCB:98eL ; BnFx/HRBaT@V');
define('AUTH_SALT',        'E Q+!1k|lL2k#<r@Uj[;)fnJIDT}K<s`==n@KrXXGE0P +3B0Zi~YM3XB(hl%KGj');
define('SECURE_AUTH_SALT', 'c-I}~*jlYZ4}4B4.~gJmFE-(&DO?TF]1[vopf-y+n.pM][Z?`->RS.`-2/Xv:B>Z');
define('LOGGED_IN_SALT',   'e]#DmyyV,P*4UF+39=toR|6Y.oE]tijfX}J+XzzrjZNbzUXKSQji+<VXD&REQ|6|');
define('NONCE_SALT',       '5DofFK||<jmZ%VPRuU$f5vKW_<F!n&(mON({A8n/9;,eW2-^p3-+zelnf;Wd{G[]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
