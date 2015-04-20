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
define('DB_NAME', 'xiaofan');

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
define('AUTH_KEY',         '3w-iMlZiyE]^2=pPIi|!O2bkr5aYGG Wcs=1?X@-12r+WG[x%z*izyD89dpD!u_6');
define('SECURE_AUTH_KEY',  'iB-R8x!6+q[NyhfdfKx(lp j[kO34D-JLRs^,cQksAdEK~(?YI;49jvP#3;cQ_~,');
define('LOGGED_IN_KEY',    '^:FoaT|D3R dmCDL[Pc]n:Z1Wl0I6Zd0^qs&r-jC?b>t2eGlCu0Qu(p)|{3@VQ)h');
define('NONCE_KEY',        'SnWev5$&mp$aw3Y=+E5xQ, wSu|4S/_sn3_mSfq[n:MoIY]5?^=7+|P._GVpR}aL');
define('AUTH_SALT',        'do!Auz|if=aU!O m,_A3mew07S?>w<kS5y#E?[u=3.Ux+b1n`vD(puZ|uR3NNVBL');
define('SECURE_AUTH_SALT', '{8cs`OJu !&PN}<.F_GlB0gTh&GuPg|O,;Zc[wbHU0+b)gG+*G-[3#8U+3,+[Avf');
define('LOGGED_IN_SALT',   'xg o]`|iUv.F^:8_T<ekc3 Qxl-KCYI01chyd$P,rd}Y5*_1#8?5L;N`5[nwm`fI');
define('NONCE_SALT',       't.#NGa>BRg(rp|o}8##-zb(dNJ5SLQXIi%8<|%| je{c@xB*8x0P&0ZU_&O.jN/[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wz_';

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

define ('WPLANG', 'en');