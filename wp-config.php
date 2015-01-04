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
define('DB_NAME', 'andrewtibbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '35rmGwA%f+-7--aJP3+qK++R0&$R{DDt>]E)1XFr~v|~/>Kj!a+$Hk+z^#BFeU!M');
define('SECURE_AUTH_KEY',  'Irp+955U+1=}*~mv~aw_:g|wjt4 dC e 3,84}#:~j8NFAT@0}9Y02sLr1I<pA 3');
define('LOGGED_IN_KEY',    '45SL-gcuX.?o6f``{:*RX0=hQ$tuj.|FX%OctFX#Mhb@;?)~RXo!C@{YRhu^znt^');
define('NONCE_KEY',        'SDJc+!`+9|#7Aa-zEs0;}5Q|r9}+&VB`K/#R9RVzc{F-TK #ts9Z6U:5R5Z]m0-N');
define('AUTH_SALT',        '*FCom^j%J/2Cx]+m|-p*B|+qz|VQWyD/X!cl@)!w>t)I2+SHjJ|>1v=ok.U{t,5g');
define('SECURE_AUTH_SALT', 'Jv|!sC9>~)vxFaxbC~(`5VtpZ0}|?->%evJ:VBo$yEMP5C||(&!Qe4}7e+kq/O}g');
define('LOGGED_IN_SALT',   'vKup@x:j{icXQ`>DG-_M?e^~^HB($M!^2KwXT3`C|?m57*p-I;c@5Q8dYE2@&yHP');
define('NONCE_SALT',       'TovxNwr)bzJ4N9f+P},_n4v!_A&(6o*2Q%v>J&W~yBxzQ@%:|OYIvSH2V48(|F |');

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
