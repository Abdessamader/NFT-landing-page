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
define( 'DB_NAME', 'brief8' );

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
define( 'AUTH_KEY',         'pZ?ZrlQK|Dtht.}s8Wd@CC[<(Gd-kW,q(KS_y!|xVmiDFw)RZVfHmN(<dDLN*^ix' );
define( 'SECURE_AUTH_KEY',  '}WGk_4Yy1sJDA nRa{N] h(6i|`fRv*n*PPjh1|Au}= (Fs~ObIU*vhD#s8NvR=0' );
define( 'LOGGED_IN_KEY',    'o7=ap#KDJ~z%@t~),8Z&WoA{_NzprP},mW/){J~HvaV}BLLJUgR*X,o]v!-QR<-|' );
define( 'NONCE_KEY',        'G?kZO);HD9@Tg(h#8jwAxF i6Ya9^7ozMk;qpu4h(,k/<AK{Dv{9uo,z_KAnz4>m' );
define( 'AUTH_SALT',        '9<)uRDR]Gz{U%5HV]Eq@ERZ!CJlwCL#BCf{44Icj9&@/LJ*p.bq4s}&j?.B9yP`E' );
define( 'SECURE_AUTH_SALT', '@KEHMavv&Az}tm~*uII4S ]al@rH(,>`oMzLqKB7u&d7$l R[er{!t_47xByX0FZ' );
define( 'LOGGED_IN_SALT',   '40-EcBGwqi4?*aD37OOi`G>-h(}2K0}? giD9m]R%mx[yac%iz@q@ ;O44YsXL&l' );
define( 'NONCE_SALT',       'I1=:BNP%f8D=^M||#IjKu`s9Mte3Wnp#I7VwsR%nN660@L2<KW;BwuZlHe*/Q2,8' );

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
