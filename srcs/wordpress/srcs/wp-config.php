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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-alpine' );

define('WP_HOME', 'http://172.17.0.3:5050' );
define('WP_SITEURL', 'http://172.17.0.3:5050' );

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
define('AUTH_KEY',         '`MtD8]7Bqh8,duj=DW&l-an$+A?BbJ2/3kk2@WZ>Ot@9*g4&4lm|+Gyab6/x-[6P');
define('SECURE_AUTH_KEY',  ':mePDM(Zl+O1.4I2v`^SAniE#%U {v/qq-Ld[?pfD)2I1F*)Q?P M<4//LP[&(&O');
define('LOGGED_IN_KEY',    'z9_w5@ek}wkdn%}`u[P]BDM`UvS /Sef/06Nu}.Ap!yN.S+<|ydVmqWE`x<}4J?/');
define('NONCE_KEY',        '!JZx9Jr[h)]K@,3.[1]q@$6u LK`]|R/uL%W},zx9Ow_:9vjd)r-|!8+o{l(:{Be');
define('AUTH_SALT',        '<TMg;}h:LuvfYG+<F(NM3?Zle1$=H;n#_.%P qf46CL0=eW3D_Cg-DON]q#8k1,G');
define('SECURE_AUTH_SALT', '!8I:EIX-Md2m.<pwK2|E$LJ}d{a#`4k92|#iG/Nfpw1_p5-Cr@RQ~#;Ll10rmwEM');
define('LOGGED_IN_SALT',   'YE8h1 n&+,|46Q(5HS*0M[mc.Fe>OS g-<8j`-ZCs7!3;Kr;8sk!|GfZ>`p+p@@G');
define('NONCE_SALT',       'j^%<6ImtME{ss;=YuFnlzn$ZlKvOYub(_AL%mGyH|G?/9bG9t@Xnd6+> oZuSe b');

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