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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'y`[ThW=|*0|Urce]e0a!Q3K{(^ [Gd@8 ,>+;du?h7FQRL!^?MDUWV8UPLk/Az[D');
define('SECURE_AUTH_KEY',  'L&:aW< hL@`bv n8W->bR`4}I-| d#r<-RuU}RMr}N_@0>g&^$Q8LmH1Jro}8W,1');
define('LOGGED_IN_KEY',    'Sf5t=[C.h7>I)fO,b{R~FqzO[.w?u+X@+M#gCFX0k%/P6O(5;MfWtL8J it&Rv2z');
define('NONCE_KEY',        'V;9^)/aN&:v,JWxmx&U^D1,UL1UHn1^Nl0Kmvd$o$+L A|5^),V[Ty)]>%])|Q(m');
define('AUTH_SALT',        'i`13=} BtE|W>|ggh(z0|SK+]vF[RYRd2}_h$+h17kN})ciY*`h(nw>B}gk5K3eD');
define('SECURE_AUTH_SALT', '0Xl ]=SkA. gkiO9#&BnwCZv0bJ&al-VO~;2i<fM^4Lw_pq;8@VBEp+w3ng0i9l6');
define('LOGGED_IN_SALT',   'Mz9]Ehu()R[$01G%`+Sc.|2rkE{v4?s4ZI.jh}ds1-)d6Ki*-s$&EBWd&x7rQq%k');
define('NONCE_SALT',       '&d#]kQ?Bn3uuG:]80OM(73z ~>eIpXdi?hFf1jmSuRn|LQq%F1Ab=*=[thJ[,6X8');

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
