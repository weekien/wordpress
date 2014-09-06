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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'user_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'bU} `5>*7ysGe:7DQyT %|D|S2QT+</a--!HV7@(dO{R)hbzzCYb6@80s6q#YzAN');
define('SECURE_AUTH_KEY',  'wrznTRLw;lSb]Jv<prR+jI<a@+&yT<8lP8;q_5s*[anM={X,T]`d+-8gE-97W+TA');
define('LOGGED_IN_KEY',    '`PL)MdP3^E?r8/M_? {+K>aT`Y?4t)W-4V~l|O+UZ:uCKm@r:4Wqn @1|PO+VQh-');
define('NONCE_KEY',        ')]*LH1w826yC)Nsi6>e3tEx^x@K}E`|xVab[3N}-9U!Xo,[|%g[J4)bywjYHUh}4');
define('AUTH_SALT',        'iJEBStgUa0s?-|8-D=o_}o?L=9{q|PSEl-1z5dp[P|D^L#Ec5]5}w9g9&j&N<VP8');
define('SECURE_AUTH_SALT', 'd<C3jNx|i[@#6q5BAVAI5F]V|A+jtgnClyS)|w}]C#@uFP5n:$w=AYGhcyW]EjBB');
define('LOGGED_IN_SALT',   'D#}1Q<6B@w[{}}.8-{2sRy/kb~]j =`y_mKKB%GilV|zj!0B*Y^?,%0HW[Ns0z#l');
define('NONCE_SALT',       ';vb6v+l4;_J&1|x7+Ts::Diq|eQ?JD]66$q~x,Z,}]ym1gJz>psk)k3I-=px7q3^');

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

