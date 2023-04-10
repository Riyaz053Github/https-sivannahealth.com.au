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
define('DB_NAME', 'sivannah_health_care');
/** MySQL database username */
define('DB_USER', 'sivannah_sivanna');
/** MySQL database password */
define('DB_PASSWORD', 'sivanna@1234');
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
define('AUTH_KEY',         '5[#7eg052ico3WtOp9Tpm7- S7O N2DK$U}RT|Qq.!&L5.lC^Lyk3~lI{cq%(7o+');
define('SECURE_AUTH_KEY',  'KA=!Nb2r 3GT7%kZ0j&ne-C2AIzBxc,@&5PE (|-;rvLMC6nA2f.,3:ku]p<3zo7');
define('LOGGED_IN_KEY',    'iEad<[Y/lSYrdzvxo;HKve+NL.Wr!1>W7r&WvAtdT{rs~]X/,ax%DjUWh<uJ|EHo');
define('NONCE_KEY',        '$|GjdY8{IK@3`a?`Cu2~v9Sv]-|4.Cjvd-.kJhVw%{L**0?Xu<STvi&!*,H=B@tq');
define('AUTH_SALT',        '(#~6W:a^FO0h]m{[W=xDc vmVcfIb<m&qj[I1dg=F? bF/(o5Mlrj9XK*r)-n4Z)');
define('SECURE_AUTH_SALT', 'uY{3>=6 !.gsNVrhNzQ6!=Azwh7Bk:l3-|-No76$F_>Wu[o&Fo@pjZKpwcrD;]bx');
define('LOGGED_IN_SALT',   '3i{nF+{(5%p-.Ap3<*VOpnxY&0`vOLkz3@AJr+/!G;f9N).dQ/>]VSg][ruDCzW#');
define('NONCE_SALT',       '/^NenH.OI*}mMv<,<:%e(|^0XQXzSAy`s|qy!S<MvL|E;0~gMJy(o;]8vUNkQxa5');
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