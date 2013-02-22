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
define('DB_NAME', 'vip-j');

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
define('AUTH_KEY',         '`Z6+-&=0vD`8dl!NUqw~/!os<8n?u,^YwTV[X?%R$:v/-DK%&xD#2N<Ck_5zEq21');
define('SECURE_AUTH_KEY',  ';LMYp=DP+rH|fb|pCcXTXR.|glc6J_&ZRa2lnMduV|bt_^KJ9*q(?|qg9f!aVZoK');
define('LOGGED_IN_KEY',    'Y&UL+oR#mUuTpRP-,<QALcp|c-z:$EZdg]Cu-1P0+EF]8H2n8H4yN?t]H1W%B%7#');
define('NONCE_KEY',        '*pW]s4|M2-Zi>o|[$+=CRltTnZu4>gX;WmE(i+HQWNM5C$6s7Ne90M-Jv&G3^NJt');
define('AUTH_SALT',        'q{I*SECZ@[Uf=kU0&DT>^FU<dJ;X2ckUV_5q9*p`?|+#3}9!#d&6-6!Et+G1H!l:');
define('SECURE_AUTH_SALT', 'd!3wwy+Vh+*dSPH|8yH+}!VNe-]ALPL:6m]$[`z:w`I]#BjSc;r4nu+v+a=PKD|?');
define('LOGGED_IN_SALT',   '|DX&qrH1Bf#zwe.:P-|crYu3;t_6SEwHv*vP--z[-GW(IeI)6+J0MpPoa}h9/*)^');
define('NONCE_SALT',       'BQyR> ^sk%LaTy|md?$2J3A#e-$a7p-RJd|a6wz++^IvSKC?mn|rDke7,WGA?qP:');

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
