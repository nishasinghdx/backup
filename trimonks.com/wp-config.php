<?php
/** Enable W3 Total Cache */

/** Enable W3 Total Cache */


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

define('DB_NAME', 'trimonks_com');


define( 'WP_CACHE', true );
define( 'WPCACHEHOME', '/home/trimonks_dh/trimonks.com/wp-content/plugins/wp-super-cache/' );


/** MySQL database username */
define('DB_USER', 'trimonkscom');

/** MySQL database password */
define('DB_PASSWORD', '5YvDTbpN');

/** MySQL hostname */
define('DB_HOST', 'mysql.trimonks.com');

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
define('AUTH_KEY',         'M`70XYIIgaDzyg6T4huam?GZxl~I"2ggXX3l8KWkV9B%IUiRx|iF0WyYvrQ/f0qG');
define('SECURE_AUTH_KEY',  'AqEcEo5j~^R+YbTFE/Lu$qZ|kNXPhY_St|_@ncSr"S?a+qydk6U)O8|n4d|wE17o');
define('LOGGED_IN_KEY',    ')5_Au_JE#?`EZ9CntXBLEcml3jcaAJ`)$^?@!W!&!51`!ebf%ma1;+`qq%!!F2nM');
define('NONCE_KEY',        'e~`vg:eCUxSO2rKIYHz%(XUvf8^:yoyMCpA&~*z5`mO50m!S1u~xQVblBel)~ejc');
define('AUTH_SALT',        '+j#LdhhI?TVqVM)i24B0D5vcuT9xIbBSx&Gt_oil4yQ4z#b`?#0Afl)1_$EuoqRO');
define('SECURE_AUTH_SALT', 'pCqh/Ap#9o0QVRWS1/uUBOc2LwTre?C(V+B:DN:25MIZzDavtUyWH7T1KLL2x9t7');
define('LOGGED_IN_SALT',   ')ruO0poSaUDidaOEZT"v*|/upzBrl$vc*Z$:K+2&Mgl7&/wlrE;0TAJU"0gz!PIO');
define('NONCE_SALT',       'v%)cF!Xxk:o(aBQd#_rFhZmNz/rg5TeS38duSB1Z)7sa&R!BC*3p~r!O1&m64R1L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_a7pxqg_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
