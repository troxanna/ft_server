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
define( 'DB_NAME', 'ft_server_wp' );

/** MySQL database username */
define( 'DB_USER', 'troxanna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'troxanna' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WPLANG', 'ru_RU');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/g[BteCtF>Jn=n=EO v{%;+EN24a&nZ79-RWB`y-D$G0z8@H+U<38hIOSA<}OC+_');
define('SECURE_AUTH_KEY',  'm~]F4hGY;5{M<e},-u58|-Jd zZZPeH{a!o$hl N AFekxDe]:h:D[TI+}eTzhK=');
define('LOGGED_IN_KEY',    ';r?|.*Rq=i>:N(Wzl}^$s_ZBYmcA5XC@iKFy4dQ{>Fn/1:{=l4Xa!7o,s3 oJyJm');
define('NONCE_KEY',        '.4}h,o?j(u~5Vr5oDg$gBae>)|f,#1%iP2{{[_&_nJstUd3;!]t`7qoJx<`04t6{');
define('AUTH_SALT',        ' V,mYOPKB,2<8UamR]IB4C99r`7A1Ta$|Y#F![dw,L{vm@JDX8W-|n*(Wc/Eq6Cr');
define('SECURE_AUTH_SALT', 'DS(?/PZ]/pfpAt]pdKVo|XcO$r|)ZY&6,W7.I!(%)h},L$rHW4W:[<AU*^uuI4~y');
define('LOGGED_IN_SALT',   'r]w@v~2dGY:h`L-/I[LZOl8f ulN-28@V[(UoC=8&;DP `/2EXx>XV=|e06kqtof');
define('NONCE_SALT',       '0|fwh-E>aUE$=+3M&Gc-W<W18{xmJ+TtWsrfO3VKg,-D|I-(j;A=GjL2|?P5C M3');
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
