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
define('AUTH_KEY',         'Bm:3<Ns-(jv}(uH-|s0WqQ%i~RNHXT.Q[$L)+I6#C-V{QYSN_r3Gp}chh9.e-k?l');
define('SECURE_AUTH_KEY',  'nZ->V~wc_XMhl@R=$JRG+5iB2{_w=6~Kn=X8)6ZWC{SXTNMh378pP?l(qpr6owj^');
define('LOGGED_IN_KEY',    '53Mm-o<Gu,}lIbVAZzAznLj,hElI`eJ?t2s.Z07! XtV|RGlSdxlwLOg=kW]<YAN');
define('NONCE_KEY',        'sJTXlO=^]}@lEw`UvqW*@Hta^fK$BMB9^#Dsu`oAN#yq^4R5JRKDg<F@<g<&6Eh9');
define('AUTH_SALT',        '<P-%Vta`?sh{p78E025?ft*1pIg6Foj{dlii;lur@#DXF9wFIjYmE~NGN9w75C)J');
define('SECURE_AUTH_SALT', 'LfT2_1TQ`fvbd`O/krqk|E)*Jwz7t*%$q2T-q=1jD=8`-$>fpjwfbw)^,P3ZnLaN');
define('LOGGED_IN_SALT',   '~1M.1+e[KL51=oL}Ebb)rjH6Go|tL{G`6NG-.rAZ~Z8D~RXkqfaC}r_>jNon#e9x');
define('NONCE_SALT',       '].=zgk2?*m-@I+1Na5^Kh;u)P-%XH@;TO|q!Pgf7/aI,E8L}hGMy&%?@b%^X<P5O');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
