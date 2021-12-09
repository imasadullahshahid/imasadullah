<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'imasadullah_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '!HGA0{nqE`DS./g{Ltg-^5PxYa%SP=8jy5K^L~0iK14IPn%UY2qp0|u/KpQ=nYy&' );
define( 'SECURE_AUTH_KEY',  'S9e5PE4CK8v<}M:JUXY.IM.vtNp$nbA.4;pFktuac?~[s Eg&/5h 8L#c+/(,T_,' );
define( 'LOGGED_IN_KEY',    'uq*k7.O.Gia4[,f;;5bH^#<{d+{y|hNN9 Pl=Egm%gvAe-tcsBoo[GIsQyqUFE4B' );
define( 'NONCE_KEY',        '#-$zWSd:RQ|*Gep}Rfh?&J$UO} PE}-,bWLpt)l<9&#I2%jecA@aOU4Di0[xfr7?' );
define( 'AUTH_SALT',        'qphk,B_L,!l^nVsF5k#I$_cJNx@(H(PhOc=eW=u@mlNUgk0Y2D`)/N+%T]*j]*jK' );
define( 'SECURE_AUTH_SALT', 'oz].xIhvey8EcS3`p{$BtISpzb[0VeZ#^3>`fjjd3byNFw-!ZV;L[3(;wmiX#aP!' );
define( 'LOGGED_IN_SALT',   'EHiy/2kx9(B`Cf}{K*S3rg{|1H_#|7a]= w$2(ZjD2%iju:$zJ1BOeHA3k5REZ>x' );
define( 'NONCE_SALT',       'n_3=z5p+Q.+E6T]mX>A=`K^EAPCXpF{SsE/G4|<~B;.eGHRkFj;-kz~]h?%F($oE' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
