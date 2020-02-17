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
define( 'DB_NAME', 'Test_DB' );

/** MySQL database username */
define( 'DB_USER', 'Darius' );

/** MySQL database password */
define( 'DB_PASSWORD', '67voWubZ61xDFuZW' );

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
define( 'AUTH_KEY',         ')f :_dnYj=+b5Gs=k)5aN8p bd$G!q/Q>jigF 7JV6$o*-V&p2olE?77?.-CU$ U' );
define( 'SECURE_AUTH_KEY',  '/8[ID&.KFEM7Z-(}nqC7q:mF16*^ei)*c]0Wamd(9TOmNT%e~h.F%}%ql^,={SRP' );
define( 'LOGGED_IN_KEY',    'rO}(_4{d77)@Pkf|n53fsUDT1%(bf]?>ei-Cy{zyfe9C$~Y{;UK[wWqO=X<p`7hJ' );
define( 'NONCE_KEY',        'a79%0ZGW0f=^sL_8z4mOxT!b2yP^E/#cNst{Xx|^!Q;)b!VN sI[c<U5U00)1xMV' );
define( 'AUTH_SALT',        '0hi/gCd{aJ9.N&NQQ67Uf6|b3Dt;nd[y mb?4[E;r[1(4^Qf(wsk*_]C&C?aZv7f' );
define( 'SECURE_AUTH_SALT', 'H__Rq@+7|{ax^i2mNM9wXzxU`]4cNW*0gS,J,6y|O&r>Iy5qAL$>3m>T/C;x[kJa' );
define( 'LOGGED_IN_SALT',   'EpLi7ALZqfJYOp?KKz$ec~u1QLr:E7E[5go6R-h|HiwB~?>6<;-B0H|/Q7^xJ9QO' );
define( 'NONCE_SALT',       '?gyx}lM|t N(d]#{sz$JEkxpU8dKInJ-:bQ2m2o{I0iO({lS$x}92T+CxgvfQ%:1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
