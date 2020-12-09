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
define( 'DB_NAME', 'naiem' );

/** MySQL database username */
define( 'DB_USER', 'naiem' );

/** MySQL database password */
define( 'DB_PASSWORD', 'naiem' );

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
define( 'AUTH_KEY',         '[p#!)z7vo5#^1Z50.p~l?Of;C$*$6*o(xIt#N {h6DJ`B{<U.>n cllAyvPcKXNF' );
define( 'SECURE_AUTH_KEY',  'Kaz@2%%QkD.jE(OTC9oU<PMJsz,n],i,R!ZQJk7/u]vh[/zi>?M(q[s:#S&YK39B' );
define( 'LOGGED_IN_KEY',    ':,{q{eF;W<O3eLCit_t-+vE&2+_V(NA*!P`4sC7jp4VQ:j~8V2-&G(2D3LlX4*qr' );
define( 'NONCE_KEY',        '4`@,aX&ctDkCm]m%QoE{*H<B0J&J&%}C7)t?uy5Qu1<3KA[TsuJ$D^NMdpClm6Ts' );
define( 'AUTH_SALT',        '=!*=HDS:~f]}@:@60ttNir*& z{VR N[Dw$x,_guDSLqSLyL>Fz%a%d@TV(y7p!Z' );
define( 'SECURE_AUTH_SALT', 'qPV%AffIJ*3TwgSNmHN}%g%bu&[<50#BCA?HOIW#&$Sx6b4zLXn_rj{(s3y*>CG4' );
define( 'LOGGED_IN_SALT',   '?uR_&FjOqT<*{_/[[+ucbe}D+G@8jsR*Sr*% ikz:cX([5OCQICH=qcOF#WffYIl' );
define( 'NONCE_SALT',       'p?Ti18cG|},>xBi ^(>d$%9X,CFT-*dTzo?TdL0Ya`M%+BLXuS#5E,Mh(K(`VkVS' );

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
