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
define( 'DB_NAME', 'tgrdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'a~)%y+--2G?ZwZ>zkC-oTK APkj5TUg}{N()ZHtGk6f(fk)j#0A|1e:aJhn%#U>7' );
define( 'SECURE_AUTH_KEY',  ']f!=@16)uE7rO|Lz&Fu)/M^[KM-Y3K=4O=mDY1vvWBntQGl}&1!yJ:s1Rc^?p_hZ' );
define( 'LOGGED_IN_KEY',    '} $ryK<>(5GKSdBT|-B>5a`#ze^q^L3#i}fd3[Hke.|4%wR?-vEQ]4)ezL5L4HPk' );
define( 'NONCE_KEY',        '+5MM].pJ@ @1~8qk}3s4o(~1hiv7--s;A9&db1Kc{UZ+fARRdbB*/1qrm)/fsA?=' );
define( 'AUTH_SALT',        'H,CAdP2/`[[a9 CXmX2&^S`jN$ycc.46S6q)9NrAz-(E@q~eO^6*e>^KzY+g>:xh' );
define( 'SECURE_AUTH_SALT', 'd`SLw[5ba0NFt!N$:$7=kAexn?vZER=e{7*)T+5Ju T6cy$?h1v$|ve/zyip#X^`' );
define( 'LOGGED_IN_SALT',   'rbqY,x4w.r`iJ,UB`cFF(y|]pGEqY$>{PyMpom4{;i@1k(|_ItlCm%%8+d9KQH;F' );
define( 'NONCE_SALT',       'w0qnI.KvDbsD;.:aDnRm]~nzjF3CXC1o4xjRp Y6%s.s}k?UMF`1;;A@~0fkHQiv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tgr';

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
