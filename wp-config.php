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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tryAgain' );

/** MySQL database username */
define( 'DB_USER', 'tryAgainMan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eBRDzJ9gUgEZaqCl' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.a[||,2Fx),.bZ|2&E@P&-nkOI mf827ul9|GP k8[hB/#!MTK{Ot4PF|-&0-h.<');
define('SECURE_AUTH_KEY',  '2l7i1vt])0Vn`GJsp`k.9609-.@3kHqwq o_C*7-QIFzq 6zuet0<hUO JZ,RChR');
define('LOGGED_IN_KEY',    'tiwY[oqfZ+4*c0F0fL%qH;:`cBTWUI*S!|k!AmB*Lp=G@)-`mPmJ+>|}hq7.Mg=v');
define('NONCE_KEY',        '9E!N.<>*yo5grsABw.H5c,LO7zw.7gbN,DJ&yyO*=0ILT?`T+KQ5YFb<$@+r.#s6');
define('AUTH_SALT',        'Mi+J[q!*ASTEG3|.N<oZ;)T)8DBdNYD,Zj,JdTK.qh[^SPhVda5i?>yFhhO)-?C*');
define('SECURE_AUTH_SALT', '>ESegfo]j;.<*Y/BECr8?C?-[MUTU]@Q:h&*Oz?O:Lo*-^b4IRjHD)*bj+Urcq!,');
define('LOGGED_IN_SALT',   'apxkMH%lyto>#72ylCbi J ebt>mDyOXqJdiPSy16I)a`+uUSP`Z%^ASb&YL#87h');
define('NONCE_SALT',       '|Rt:+}5(]-5g ,c{-40#O|$pDyonWh+ujO5b$kv ~Dy<eAu+<k%HNo&AM>cnPLQy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbjw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
