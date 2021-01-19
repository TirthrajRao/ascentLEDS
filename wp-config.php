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
define( 'DB_NAME', 'ascent_db' );

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
define( 'AUTH_KEY',         'RK+*|yu^{8Z J@Pd[nNe3u}J97J[Xd&I/Q;_h<}CTz4[U^X6j~Wpf,)=*1y{x~Rp' );
define( 'SECURE_AUTH_KEY',  '!0XFqR)Et-[yog0qxS(_{a&Yf/(2n*m5OjmZnH}.^>?!iD(y:S_pzk9y!@*fxGUB' );
define( 'LOGGED_IN_KEY',    '4iM{WKC{!yU>hi^5q(o4X)5-swgo7m4:OW{Lzf8t+LIxiSOk/&7M_0+]&Tw&BX1X' );
define( 'NONCE_KEY',        'jy O{s2g~y5ztr5nEJ1=Wqu1kO85v.R<uZ;W6vV6vnhZi)/demv~taOyPkw4Ll2S' );
define( 'AUTH_SALT',        '$@In( Sz!wjjXe*Ph-WW,]rMxBNN.xbp&PdRF2H(K8v)#@i-FRxZl!E1d(w[<1@Z' );
define( 'SECURE_AUTH_SALT', 'o<lgfq ?TG@*iW?T2<F6`E$Pslk_)B}uQ@ZOa4bkhB4a(R)@c8])!~+.!to!}y?>' );
define( 'LOGGED_IN_SALT',   'v:!2i.JgU,E;$2[NN.HqckpzAh.k*t_35rafBZOKe~0MzA~{dj?=3aL#X?ub4G$T' );
define( 'NONCE_SALT',       'E`t_DAKIkndd(ybs:HV 9&:*3AN|U#kP@&g,x]`K|;o`YcgO<y[y`>5UbAC&s39n' );

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

