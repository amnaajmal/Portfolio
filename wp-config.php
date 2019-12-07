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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '[^<cPy%w}4#<GSc^_zPkx7{t3 F@mBnB~4NN%W8( pmaHf6|#OKN~rgku8 Sep@T' );
define( 'SECURE_AUTH_KEY',  'a1W$-Pk%x|KZ$zj@:Dc6*!NbcrMr[ra/x{e,g{G!4[Z &Zw,aO%yg0jAlLR&ce0+' );
define( 'LOGGED_IN_KEY',    '=}{B?VC+Tt.D#q8IELkP7K.b&{!`q4*;+Umwo#}IwVyV|ToSyi{xL>VG_(Pe|DS%' );
define( 'NONCE_KEY',        'RHstOC8@[G~XA{YMf(,L?!SQ%)qoF[BKWG6G:RC0/ge%J]K|Cj3z)f8`2oA%*g+O' );
define( 'AUTH_SALT',        '9!^n[%Bie00nmu]0M;mpoP93&k05JC5,]Ml:|g:Lo0I{V[ //D?6= PicS];mSCL' );
define( 'SECURE_AUTH_SALT', 'pWand`#kIVIsCwXTO`q(J7Ewb-|gjvBR=}A($v9)!1B0`5t$Qb{O5* _).1=7J%G' );
define( 'LOGGED_IN_SALT',   'ux=t4Hm_d6CKgRbn%!OJBh$,jINJJ~nfoy~z/nuVrhavg}oYr*]zT}zXVIZp{^r^' );
define( 'NONCE_SALT',       '9/(=#?-56yEtbMz:`ULTuHJ2O#Y~Z 47}^Ql;:T8CtGS1QR16~BW=Orv|EXtaln[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
