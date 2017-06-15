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
define('DB_NAME', 'croweddurshal');

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
define('AUTH_KEY',         'pby*lJ-mtynQ&BWnj*vA^_9OH&P_e>=ay4[|8;q`-*bx?it8CeEKIK2A|W &GP(]');
define('SECURE_AUTH_KEY',  ':zmob*o2{rfBJNp,n`H0O%*A88W/rJ=AI?ps[35-pg!ga7MrWzr} N}JC4SAb9xD');
define('LOGGED_IN_KEY',    'Q.`=Kq:v[j<#oEuvhKzflfY}}rhjA2k4,bC^9F2qBK)-TePu2vgIH{FG%B}18%xI');
define('NONCE_KEY',        '.>,*$11[d2fJzkRu]]i<9G)K,|h=5ZW*PE;C<@gw6pYhm/<<2w7NM&V7dErG6$n,');
define('AUTH_SALT',        'uDOK?5g~}A}Di3?~*D;P~TEJWfkR`T8gsi%`F[I0.Ntqx3L&n6q]K~4Ve]ExHX5:');
define('SECURE_AUTH_SALT', '<k?XCr#dM wqYb]B`}{G,!YMi{a_>8EfL>oOC b,Kmsc-mjikv;V4]5T_>qqqV8y');
define('LOGGED_IN_SALT',   ',Mx:;6X=1oz9&ng?BCj0lK=x?:%M%J1H9a<!J#wkY#Y?Nd-_W?j,`PHG1qP[3Tu/');
define('NONCE_SALT',       ':M,&W_igJo?}Xa4Kw~&CvAnx WbGB?;TIw[)1CgV<=M|xcyOWsvO[.bjSR|AEL5`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'f_';

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
