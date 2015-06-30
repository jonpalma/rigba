<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'rigbapromo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C?ny#45~J*JM=sBF~$OB)~q{Rgrqa-C>_7|w35+r] -kxEO.~S.XU#a!+F21!R`#');
define('SECURE_AUTH_KEY',  '}qIt5tXz~jY,-i&D8glE/& xbL^^P=bDI|3ye!i`}y{~(CKG.1m|n/3=_rTomX1z');
define('LOGGED_IN_KEY',    '#_+4M;ddk~[:F612eYgz<wu;+j4f,75V-P)NVe[zS]l[Cj~K<;K*1AAIEzWE60*p');
define('NONCE_KEY',        'qbrP7JX?fr]E{,^CEV}tofU:[1 Y6_!pSn6CXI3Q#T}{i0-0?w,czAl^n5|lSpwj');
define('AUTH_SALT',        'm$|eRzyK:<Y;a{.P}z5-s[*5j(&mQ; `4?x^[!e%h flP-%EgZp$z_MhbB&u.Q4*');
define('SECURE_AUTH_SALT', '+NRZIk}`C|mAD3Ai^yB)(1f)!s3@A+quR`T+4E|{-n~vMrV*CVImRT{W0!fo4wfy');
define('LOGGED_IN_SALT',   '.#e!%1;gKmEzVt&/qp0YzUqdN(<s=nrE;_(jYD4==K-?|KtQfQc^WG5w1#FG^|Wf');
define('NONCE_SALT',       'u5L1hWzyHo+BVTZ||>MCPoEsNGV)EU^hS_y+TNrVB-eJxb{4E+R<pNAff?i&{ch&');

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
