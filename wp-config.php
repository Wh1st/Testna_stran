<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_database1');

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
define('AUTH_KEY',         ')6P~AdM~B%00o_O_fZj?:oJ *Dz!5p%@&heefs`z`/iRO~7j`oF.oW&5/`b2c}G!');
define('SECURE_AUTH_KEY',  '}f _FZW6sUU;h gec}%M!.Ak.v>;dGZbg3h7/)4[[=Gk4n[}={([pGe>mf7UjgAy');
define('LOGGED_IN_KEY',    '!gwYjv|xH6WBpnPR2:5dooTOT%juXA Ii:J=Ay:51Wydz1@@`kw !=^(sO@#!+5)');
define('NONCE_KEY',        '(X:}/B`C_sDj{k.S787a%;$vXm4Ix*e(#Zt7NR#haNf2TDUu#Wd# R@[&I*tp(d$');
define('AUTH_SALT',        'N{3Wa^<nnuB])I2J]wKy1Ck`(SzK,8d7d<M*X/=_PU<FV5T%x:~^T+fSDkr3:|kf');
define('SECURE_AUTH_SALT', 'XOTFlZF-pX-J*J-hMY_;l-[oRm/Adj:9/Fsslt0^4L8ft_H9E*;.2UlBt?[[.?`.');
define('LOGGED_IN_SALT',   '#1sx_~>1AEudm_u6IPinmNTj6q[z8T)6{[c)zR=ZGuTvEeq&c/9QLqx[UQL0?%=x');
define('NONCE_SALT',       'FcM7G#H.Jx(%W:mATCWkjeZ9^U;LA#aFJ>c]g7r)&_wm1HG%C1JYs*KRV$9~wCs?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
