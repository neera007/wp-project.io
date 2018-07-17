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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\3\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '3');

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
define('AUTH_KEY',         'N.$Ab41~(r+l.#XX]eLU,ZB*@xJY0>=P1H{HkMNk!fq(E~M:)+)J|>{$0*8QCG:G');
define('SECURE_AUTH_KEY',  '%quZ]qfksl(]-v_%!V.9>1#mrh[AIJO+]-,9FdVmy0$I XEkOgy$_EHpX%ioQfA<');
define('LOGGED_IN_KEY',    ',5eYC}qX]98w2MNS?~*m#I]#uU9`~Y 9rIFzSv.g#h?~PZ~S2JOI1QW0(h`zRexz');
define('NONCE_KEY',        'yD;j )J^]o*6!SRBP456+:|Y>Qb2n=F}>RuE4.c{9#AF8a*(FK~~HJbeiUietgx3');
define('AUTH_SALT',        '|L;6S^u8z(`ki}.LdqdD./RwAsiKpEA| Vwi!>!n+@jNkm%)1S]_s?&S<BSN#cB-');
define('SECURE_AUTH_SALT', 'YpfeFLnK}+u*K3U3C4,Oemz6v9A`HdUp-<[h0Pcp~kzJQvs/N!WZkLR/(mY{ll72');
define('LOGGED_IN_SALT',   'T?E^{W8OTCAYFja?F6 [hW1{ d$pzbZ?u!$RpK2C4%D^7wuNn$YMnL,Z=:lyW-.h');
define('NONCE_SALT',       '&X9K-%q8b(!_SrSLy[osw).Ca#v9XZm1*vc&(`,(krjW!`w.hSk8.e<yzzH[sI0 ');

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
