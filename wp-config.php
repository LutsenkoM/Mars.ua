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
define('DB_NAME', 'datamars');

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
define('AUTH_KEY',         'R uMZd-0hK#*:xyyRiwTh8qC9QLBw_oEC,N?wZ+-E9t|+R|!bo3m0#w+ !7k+~bk');
define('SECURE_AUTH_KEY',  'GP`iS+%VS<{<MdM@lH?4Dr/{5in+cOF=Izo~VdXVtnS+[:].~kaWOhGHC{~@n%#0');
define('LOGGED_IN_KEY',    ',S~@slnPxEToLr|sh$u|UKr+gfW_G<33IZ|`o@:D]n24+ SbOXZ-q+BU-VTjWS-,');
define('NONCE_KEY',        '?|qm?lk{_5BMjCtuYiN7zG?i^ -#V){D_}&mbw0ab6p] #8t wWp_c*l|W]5a#|+');
define('AUTH_SALT',        'f4sWI7oe^>l*}!2}-XQjoKB3+5q#qzYjc=.o<c8+F0-U>uKR3ap+4jtx7c%.S;7+');
define('SECURE_AUTH_SALT', 'Ii`yc9L<KR^K[0AjX:TV7}mb^(~#F+v4_usg!zjFLE^j @&8t/%4|/QriQBDo`S?');
define('LOGGED_IN_SALT',   'U&b/E3cO-BW]y?=XZu6Y#HU9x#:Lbu,w:)4/FD;%t1a|@N+fh~Le-Cms9*8!re><');
define('NONCE_SALT',       '~Iwn`/@ D%92KQk)bb%|;o,+~p1|`L[vNW6m|.Ba:7g%#kdwq7aI[G/g+D&ZV&}>');

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
