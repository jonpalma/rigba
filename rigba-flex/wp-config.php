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
define('DB_NAME', 'rigbaflex');

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
define('AUTH_KEY',         'XxJXF8y5%h#H?vaQ~SPOj%u5.Cc86)~4?)OmD~/N|>^mqFv>P)}-bHnA4!>hl-T6');
define('SECURE_AUTH_KEY',  'eTPWV{%t Gns?i`!if![#GjTX1Z,-.f#<Bt8)cIv~[u_d_I_D-jI.3_[c+DJ/VcL');
define('LOGGED_IN_KEY',    'Lr[]n{Dl ~lr.-t`|r3<_AjB:p-L%]FBe,vI]C1`i+*TAc/|XA>r*A*%yTn<`qHx');
define('NONCE_KEY',        'hh-R`VfUqr2lnZ=_-,ckqq8YwXEEJHSLUz[m~):BCev^i+7:JljFYfPZTE7/p5Pt');
define('AUTH_SALT',        'g5[<[sso+;!fzpAmR^vCd<xXt{E{9,_R>+8Z%O#[/bi3oo4[^N/jRu>w#zjB;zTK');
define('SECURE_AUTH_SALT', ' ;=iINNxm1|ubY~&+[[Rkw[qf/S)[@].HaJ7NA8jA*VwCV=nRcWQyE;5n G-q)^8');
define('LOGGED_IN_SALT',   '~f6o--9I;7gbAts6A,CGYZ kiVnCVu^kC[Ymg/<(J@}P])IWW0r7x)tM=74N&?L#');
define('NONCE_SALT',       'HXE=L65zj@arm`r+=^jy=loCXr(+6HUC-Ppo#FOMj-_EV./C+s*Du<drn|)AQsS/');

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
