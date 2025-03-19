<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['WORDPRESS_DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['WORDPRESS_DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['WORDPRESS_DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['WORDPRESS_DB_HOST'] );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F(t>RI!4Vv#y;8yF<R8da%&$wv[hi)HF,2])k]wU~5c)@uydD&!uSf:}V`TWc|-1' );
define( 'SECURE_AUTH_KEY',  'Xy=O9c/NSAnyq/k1@]>5,IpNh5YAO8lu&!Y6^bjM.o%[vi}mTN;oCRRU#+;@|l(b' );
define( 'LOGGED_IN_KEY',    'Zw_b74rwE/}bi-g3yk#qHb?.9^{}]K>,r.(]{so4$UA+;&MXl&dTK9w9p;4],J9N' );
define( 'NONCE_KEY',        '=kAtTRDda{v[.]1ZaLPNuhY9/*#iLh:3]7VHZXT{w0VidrIsI25PS1guyw4BPrVY' );
define( 'AUTH_SALT',        'wG.iF-O,JqT9Vd9H:fB!XU^8Z=:YBVN_P@,bVygTiCU_btykd(qu%Eb@Jg/5SRgW' );
define( 'SECURE_AUTH_SALT', 'c{5iyGD_POJ12`El?kv-<fpk3TbEzjO/;XH}6Ukx0|+&XKuCfR? TH2w;t)Tr,fT' );
define( 'LOGGED_IN_SALT',   '>K+9GJ%I}yik4<5D6h){2a6Y(R^cLy/*NP5+d1;]*y]ZX~ANz0!*->/~74ok{?8:' );
define( 'NONCE_SALT',       '[}q|!4brx+7v]6MXdk<w;H[3e-!L#uw[p62h_6vls=tM&OIFHri$Ta8[kI[Iu_Gu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', $_ENV['WORDPRESS_DEBUG'] );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
