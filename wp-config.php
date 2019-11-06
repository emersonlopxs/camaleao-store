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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '46125caabbfc84ec445492e56a25e9570cb3ffcf1485e389' );

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
define( 'AUTH_KEY',         '<8,pxAYpdTuEZe*nW$>}AAsEfSZa=29DI22j0W7)K(VA6(`9:m$fUR|}]41<!{>#' );
define( 'SECURE_AUTH_KEY',  'N=-)utV(I<c=}<*U`gPPLkW0e(]9T/=QfY?wb,w$b*uweiOz/rE37rivR:;4usG9' );
define( 'LOGGED_IN_KEY',    'KF58-?$6wZZFY~r$gN!~,X|;$WGE4GUatFA#QY}}f9q5*OPb79h<v7btP/|ItFOu' );
define( 'NONCE_KEY',        'HqS!a._~604OY~V(Ujm#*D)@orG`y-q<pi{K3ZuF0J4yFx:mElu3B?7?Hh?A,P`F' );
define( 'AUTH_SALT',        'B}|NlNqS+r^]Z,vN}.Zqp!wkI1 lgCqM}t1U;uTfL}TMq#!HG~KO2(26fGw`a,Ej' );
define( 'SECURE_AUTH_SALT', 'sb#/t~)4kv`L61a5aS$@~bP<ga9hY4sUr;07Dg=T}iz U/fz_yLX];J[I5^4n9hS' );
define( 'LOGGED_IN_SALT',   '%C>Iu#$_:&_0bXoVbL_~4iOWl-FG,Qt%{*fpiLQ>2>-L9bC_;lH#gW%&,xv[!c?^' );
define( 'NONCE_SALT',       'wLq@?eb}1|.x/O#L@OTKe;C%j=&o?.5q+/5t0sp`rTY=WnQ:w~=, 5ql#|}O@jHL' );

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
