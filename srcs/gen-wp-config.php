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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'Hh=?GyY{= jNtQ/vgV3Oz}i7[*/~}5X0nB{%8C#61|*[P*wF]_jjL:T`/0&V,nE{' );
define( 'SECURE_AUTH_KEY',  ':m$IB.:AaxWt9fMtR*!gKNd3a@vnKJX6!M(z_e{ Q&u+i*Kv;[s}LTwQpZkt-+,5' );
define( 'LOGGED_IN_KEY',    'a? i4hU+5^45,J5Zq[{ebc6232bPn?8RSJ4]U>fZm53K$Cokk=O<Jr7.?-5`bw8.' );
define( 'NONCE_KEY',        'eYg#ZIss_dsu65..3i%VC8q!#~Fu`TZ0s5wM`P&my1/+ru&,KY{}HG([`mV:4T4!' );
define( 'AUTH_SALT',        '2wo#(gu}EsouiLYXyOEDU~k*J*Ad%XT}I^M*cAd<,C2ZWs,*lU^T7s;n]Ixm@o}^' );
define( 'SECURE_AUTH_SALT', 'EsKOmj.R~~whBH*<1BP ,4.%u(=+#R7*{j!Nlv?I{g9IhIi=/e(TM=HuALnF6y>h' );
define( 'LOGGED_IN_SALT',   '3m&{|)XE<qn: nyR]>vlu;YsD:_*{i>0b;yDnI>s*.b1tnv30Hkc39>PuOi9p[Xp' );
define( 'NONCE_SALT',       'AKi:tng`.>2_xnkQAC*>)G2qNv3?k=K^-WlERp$h6PE)j@4}P}g Y^wSG!R1Dc,=' );

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
