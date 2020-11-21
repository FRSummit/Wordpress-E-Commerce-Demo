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
define( 'DB_NAME', 'wordpress_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'frsummit' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'yZ?Z;i?q(.w_%`RXEB:{xVop@v<bP)+W{I]SI[Xdf]#POT1)sq]R6{@-TL<d|]q,' );
define( 'SECURE_AUTH_KEY',  'vQCT)q&~bgV4uRp~1vtc :QX3B>1rXFu`4[Neo/>JQH-bCmL~gb}o-2O(Jiz+URk' );
define( 'LOGGED_IN_KEY',    'cL _<DAGQ>Pp(.:bcOQSV#g?}O.|p2B3PkgQgQw~dF?UGq+C=7WdKKRp5s#lXu.~' );
define( 'NONCE_KEY',        '@&l,`VjSDr4?$of*U2x =I!TXoTr!a)C:7Pxx.oTckbx|,eaQ`{jsMg)sxrsElTJ' );
define( 'AUTH_SALT',        '7k.|WbsH&v&T*n:^0boPxN5I,1IUl.oQY:0p^gRUbVa^$h[P8p~~oaQ]7v1vo_ka' );
define( 'SECURE_AUTH_SALT', '2NmMR9Jj$p$R-$OKjms)fsnf#u.w}B|>X60XB,9 O5$LIwaUjgYO$WM||-(]2n,?' );
define( 'LOGGED_IN_SALT',   'u!R!6f31/;B*qFgNWj<p}Tlk*HU(G!MLO!#lo[X.&6d/2b#IDn>h-m#5~54:Y&9)' );
define( 'NONCE_SALT',       '/A({:LKId_:WnQ~L7.}W@jz?C@r)R41dQuCi)M}4;C}W32JTN<-j~=vTN3e(o]n:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'frs_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
