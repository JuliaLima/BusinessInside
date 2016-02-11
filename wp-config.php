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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'juli');

/** MySQL database password */
define('DB_PASSWORD', 'H1p0p0t4m0');

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
define('AUTH_KEY',         '^io!+7E<C`MoGuhMy4$)oM;JW/C8.uHb37A47_D,sN,_qelEus7frYEvLjXlDw./');
define('SECURE_AUTH_KEY',  '!e7c.a[>TsY<Rl|Y=2/C+a=#<(KJ|.o4l(Q7yC]X=]H%EF<r ~ynKozmFiBwJm)v');
define('LOGGED_IN_KEY',    'S5zED-UA!@V|HkUHs+a?)vZ%UdFAB~ {D7U1PG,&w]m5c=0N!;V>e]Lr7/<eda#d');
define('NONCE_KEY',        '`j[AZah5JOLIH&:wQLlqE@c[]!<a@MK}fw5A3~$QZ?6F^OM/A[ZivY xN]Wo0l9(');
define('AUTH_SALT',        'Gsbg/SQeMl!hPglJ}d!mI!Ze#8*wq%]cmSjVG.Ryb<?Er([8Q[FV,]L%k#.VK$p}');
define('SECURE_AUTH_SALT', 'P(4XrI]$Lc_2!a62>iQEYa u_z1QEyY<KL;xAG)f}nAQh+GkP_A)yO#A3k~Uv:3U');
define('LOGGED_IN_SALT',   'ks/A]_PwmXy5k(DJH{k-{h[0NBC-kZ~>!J8I|o_-15bxe%Fp6P]vFb6!Lj:@EmSh');
define('NONCE_SALT',       '?l!@ME~D[usaj@8,dLlUG,=(|^K>!t{$)Lx~Emna#&t@HP=(c*j9q#:cv^@W}:V1');

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
