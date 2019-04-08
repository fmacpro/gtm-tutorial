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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'password');

/** MySQL hostname */
define( 'DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U^ZqHs|Y|G3Q4D#CUEl9]%Jv#wc*%PASo~QrJ-PJL+F2n+Zi%E+C*FG|+-iT>d?{');
define('SECURE_AUTH_KEY',  'B5<Juan?KVl(-IiZ/giEsrQ:19d*;}X3Mdy}#9&d%-f/$E52*-XCvGHAjO^|@F3H');
define('LOGGED_IN_KEY',    'iSX#xq&(lu`:MoS4<;N4`nC-8RP#jfYx?ptI_M<[hSU[14r[0o`iR@T@&>Ov*wcj');
define('NONCE_KEY',        'I~H|{(]?k/Jpx.U%{pG1i+Dv5O7?y2tmgA7|Uf[8OW+mz@>c6+3>@;6soi0kT_yP');
define('AUTH_SALT',        '#j@90/v1<(6;b,X!)[0X( ednDg-Ya%Cp],[T$0#+Mxl+=?F1Nxc6r $-+@mc=x9');
define('SECURE_AUTH_SALT', '(WdbC|{>MDQ.]{ZfnS{!M< 2enNIPwj^>M)UPU9jiGl3aT,,uw(x>&o7Nk33${k-');
define('LOGGED_IN_SALT',   'I.o0jH0XLX9;Yj`Q1vp{HY}WX-*p*F)0!Cd3)`v$N8r5W*A5c?/7><%^~M:i!6U-');
define('NONCE_SALT',       'fcJs 4l7Q0V[]*&JgtJ5G:B#G r;D9 D5W}t0Z9}]Ky+5c0;eH2| pY*N<0T{H@.');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
