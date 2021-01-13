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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'H)xAiO#16HEI-8D>FBA(?Ps[9/<mg.4RY[B;Y&! iw#ro*]y}IYrWYRv65s|qTs?' );
define( 'SECURE_AUTH_KEY',  'HW<<,a=Cp0cUEt>aU}.slO0lpc~hX?ToBW]7dtD{at9|n XlBJ=[i5%i>SlB0!4;' );
define( 'LOGGED_IN_KEY',    'AO>L-%R`Qw.Q92e<c>quW7gX@_|p}ST;k=eI:r e<S:e9F7u nuK,Mh8Y9|8~3#Q' );
define( 'NONCE_KEY',        'tpC+X-U=%$w5WnnQ,s24Kv-KwZ.L[Ml!eJg;UGl(iq$CQ[5=&ny#t%lHX[CN[No;' );
define( 'AUTH_SALT',        'pXE}>{`+qRUD&r%we#y&Z%@jtN#KOVbQ?eO-ix(1Jy(}pcTO4/Fc&=XZD,@z][mn' );
define( 'SECURE_AUTH_SALT', 'RC:*#F^&v:o8eY,S|ygn{u5~0Bnt%GhsV:D&31bQZvp=1$Hy^+a#ltAWD}K`Ezz[' );
define( 'LOGGED_IN_SALT',   'D8AXu>t@FnV9{#XfAjj_RiD6tKeHNEOP #5jx`L:CM/tzkxa,:dX<j~$HIp3-ECd' );
define( 'NONCE_SALT',       'B~qnEK5D]%dBo:V@vSrSB,*,Z|B1d;;-R,}BAx}>$jHQA0;]Fk>,eH`4>fLLA@${' );

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
