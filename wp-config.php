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
define('AUTH_KEY',         '!P17{+#L/~@-qj>~QClk *m1Q2p%}u]ge^mN|^`m20+(Bv+tu>N:KdpK7]{mnS E');
define('SECURE_AUTH_KEY',  'Ky_swG*tW bPE1{.ZNgr+1cp$JPvPu~gWdYCK<:x<!H.uI9KMY3sU_Sd`zM20W1)');
define('LOGGED_IN_KEY',    '1XrG7~/rOCy44W!@zz[$Jk.WOL~KncIa-qMdQnFP?d_:{VILR;~da`eoiRt~.;#1');
define('NONCE_KEY',        '-J49)CdKH:l~`OvCx;xld.cA{Yo2+=^GN|WQP@B}vjz=)fO|)M`Ut*GB9I]d<ea5');
define('AUTH_SALT',        ',2v+OA_huW$cyUDf~<lL as7~U%bHZ6=dDikSpYG4R#Vj>{:TW7?q6U)6,s^o /Y');
define('SECURE_AUTH_SALT', '%%VC*--5!O,aQstZvMeE {v?FXLv4]bH<UyiuZ NujU,Al35Z|R=Kva=q670-9gJ');
define('LOGGED_IN_SALT',   '0#W^Bg<4nhYa_s|P:NdKJf{l9b8%FJ(4%oS>,J-1:?c-::n.J1$._%V~0PS/^{23');
define('NONCE_SALT',       'aWVE!x0xGTKj1&Ke+(lYTCCZ4IVu##$gb+<8DmQ:GMtt}9Y5y.G+o5;;c_Vl1@_j');

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
