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
define('DB_NAME', 'muso');

/** MySQL database username */
define('DB_USER', 'nm_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Dancefamefew');

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
define('AUTH_KEY',         '/ibgc|!T![Dbp2flfviA4M<4b,7gE* ;C:u. gO?<g-NrEQ;+x<f|W=f97)nN]l{');
define('SECURE_AUTH_KEY',  '-mwAE`VrtD@st_aZ5~8LWd$9S{HW9CBz_7U,_u)w&c~80KQS!6T)H1IX[A(aOC!}');
define('LOGGED_IN_KEY',    'a8p%S8K&@f,:Ek7)*)Sl+yBz^E53/E(869oE7]z^p7Hoke{Z-8>xfQNTGv{$)o+]');
define('NONCE_KEY',        'HzW3;(`fxG+bcVE^(uFXj+%j#F|A&- L]]U85qsP#TkFj*zQs*Mh ,6i5!nd6`>A');
define('AUTH_SALT',        '5<mP#S(DDW+n@kb}=6VaH3^[wa:cloXeZIaiygZRe0!5^FPR,[Gc|TSW! $7;Tt4');
define('SECURE_AUTH_SALT', '03J}4tVY,P/ o{&l:PNmub];JOLrD<>4)+_j.wsyj79X`3Nd<eUf?1BnthC`2oXC');
define('LOGGED_IN_SALT',   'tomb(cvcD7`d];I&Q-*I].YWN@k{=AjaC-N-0<@K[P=znT(T$N3w$iF5>^Tl>u,H');
define('NONCE_SALT',       'aoTouGLCn|i$KZ;M+Dez*Z~y5QjpHT,)v`tzUjBGlnr.~9aa}jxk4n::,zrYFk)=');

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
