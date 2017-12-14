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
define('DB_NAME', 'lyac_redesign_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F:1YN. *vWtW~qf7Ruf93>hLY;A4QInWpc#GP c!iRf<KP%}d3PbQ;OB;/_)`Z,6');
define('SECURE_AUTH_KEY',  'nLQgJ!OHY0:I;}<Xf`4ozn`bV9+.PJfJP+A?o`6ie~M7;GL[,3-Xxc=HXtro[$<n');
define('LOGGED_IN_KEY',    '$~4|pev@HPcqJ[(HU@noY&{05PCw*?CJV3?(&Q-BUPO NKr/uGDmm6`x)(Mo= ~L');
define('NONCE_KEY',        'V;JT9vxL5G-:%)UI@-Le!3,:kfKqgue;7W>(gyqA{^3{BoyPH2=`{h-6I 7a&(F6');
define('AUTH_SALT',        ')g-]t5_olMbo@.KmBff[)[wZ<7`/^WRFMzfdyv~.XTF=v#A&kHT~B[+mjrRr%|ad');
define('SECURE_AUTH_SALT', 'Sx3ZSI!XG)z0*S$:v]+hB+g[ut8+#X|_$gPCIp]VvdUdG<~@CoI!)IO c>&#+(d|');
define('LOGGED_IN_SALT',   '3n+1y4]_XR3}C~Q6#32F$OQD)ix8DMIkGL_*+5;Z];(1gOFM#xU UCrbd[/I2fph');
define('NONCE_SALT',       'o>Nwz_b<<9=?[EA~]rK(Jr&{lXn0t~[enLA)`WyqdRqZDhF=S+O2%}Dc=$-mtGx`');

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
