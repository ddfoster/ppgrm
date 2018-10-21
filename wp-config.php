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
define('DB_NAME', 'wallets');

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
define('AUTH_KEY',         '@,yXlR|FiZr(v?TmHh))X;9VqTRv79pz1MPx@>PQ]o&}PMFJh~$IArmU=K*#*+|#');
define('SECURE_AUTH_KEY',  'fx`W*sAnZj?!d>d(:E$iUWoZA;A#MNozO662BQfGBI&Ou6&.x:ni>ed[dUmi-cHG');
define('LOGGED_IN_KEY',    'x.-_}h{B#5}D*Q@Iydg@4H1.g#h{|O@!jnN2~!Oeq.jLf`MHu7ly*c%:^quo%$PS');
define('NONCE_KEY',        '>g$|+O0FK!;,B>^Y5=:&.{mT_z{r+NP [4q8dF%7M.l`o_WZfgk<A%},IT%d.!4x');
define('AUTH_SALT',        'Xl9G,}P@qLS:95``Rd@i ~oj r~1J r:g~aW+GTCI=zufeUSFSLcu~Yt[:PuQ{GW');
define('SECURE_AUTH_SALT', 'I9m)UcT~g`v :0Eo_<]|F9~ x>p}KRM9<?tt@;fKTR(```lZ*O0!h,W&7f9lUh_K');
define('LOGGED_IN_SALT',   ')VU&;=![(?}zV4M4}nbUu-kj=9rj=N3R7sU.{ 8E|Y:^,CmlR069i>l<M@g!%M{C');
define('NONCE_SALT',       'ypII{Vlf1k36F_nd/rraFwemk$$?IoNw{4+;nV$mdHSzoJ^9$2iO+~w#ghnZn+xb');

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

define('WPLANG', 'ru_RU');