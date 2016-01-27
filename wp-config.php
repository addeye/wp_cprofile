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
define('DB_NAME', 'karya_mandiri');

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
define('AUTH_KEY',         'tYzq~-6`URY<f5{$,,KY<To4ePG]Dyg0m>4!>iyF2]SK8hrNJaX+R,8AT,qEPgG?');
define('SECURE_AUTH_KEY',  '+m=fZ^EE[SdTm&1lETOy|mj[_=FB)@REPo$chnBww$?TX:>`83vdj/{fhhBtxgv1');
define('LOGGED_IN_KEY',    '#P2oN_!Y$UjK4fzUv.>YvKnfSGE./Ea})iTLQR~^YU)W`nKh76`R8GwqXL;es]Ba');
define('NONCE_KEY',        'umK1dF`8=u(o~fU_P_4KI?HFuen-`PhV?:@gWNx#4f` `SXl;EzS/yb_~Kco9Dz$');
define('AUTH_SALT',        'ZWB/LHfGjQq+pQJ]fx%0R]C_vs]&OU*9(};!ja^h&pbykI&^?7<(jL&h8W*~hFq}');
define('SECURE_AUTH_SALT', 'yoB5N:h![b#Un9+R>18S~&*wu[s-:^)Vp//L`l0csjXXJo#ikq<_R8Xvd4qkV(2)');
define('LOGGED_IN_SALT',   '3}:-xn8~l0uGG})%Qkk*:x]~{#~w!F$C4.7`|V/*ktC>:<>?VHVD{][x!SOd(K}7');
define('NONCE_SALT',       'I1T$<Kl-i%Q,V*xS,V{G_.<1r-FR`8cI<!LVav3i_rXSBHtg65:XXp.E:hJ{&7|w');

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
