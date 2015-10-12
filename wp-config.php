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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mi7lindo1327');

/** MySQL hostname */
define('DB_HOST', '192.168.33.10');

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
define('AUTH_KEY',         '8ex`bAW}@!|[z@q6es?!?J0 ^j25|YLu.Bz`5|.d<p`;f++]wj$$Us$+{l9bV+m=');
define('SECURE_AUTH_KEY',  'jEZ]z0dp;n]]Brxx-1|,fX}O-!l/O2.D>|3|-b7$U)[P-Hd.+Q++PDO|Yh6k$vsr');
define('LOGGED_IN_KEY',    '/F@dkz@u)rJk)B~Q`lEoQzU;E r+;n@Zpsp4`^3^IztS9S()fh?Ny+(i%|TRu)Kr');
define('NONCE_KEY',        'J}/4_R;Gd8kt<}58s.VA#27=%hY}f-zk C|L|]5qk2c<HQTQ?Z;MakP:|Pg/!UQM');
define('AUTH_SALT',        '|AO|[.T3L-NMCd.>M*C6D5B&,_7jN2Xc>1eEr1WHc!+BrHT}+B<M;*++j-2d;q4q');
define('SECURE_AUTH_SALT', 'hxaZ$TMA-6=B-p O9NLTQQO8?_cg52O}vswRjL5YiCgbUYFY!OU-UXT|rGLrI>vv');
define('LOGGED_IN_SALT',   '8S0p1=a^yoBEv8,u#SqTJ<>vObWLjpZt?+(?ZBJbtQ6]lrrH$ nL6T@ U+xj nA*');
define('NONCE_SALT',       'KQA]g(+Z35.1KxFGu=_EJ-8/d>sO[ub;}c?>@S@CILi[d[,<=l(-8WH`mp`k3#fl');

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
