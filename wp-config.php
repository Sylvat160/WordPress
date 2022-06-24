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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Sylva55' );

/** Database hostname */
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
define( 'AUTH_KEY',         'A(POmh^#Q.1)N|S6%p7UmLrf(8Id%lo2mnVHi9+.&^9TEksjDP3u`7Jn9`_b*d,V' );
define( 'SECURE_AUTH_KEY',  'G+|{}Jr,Y#{E4kZ#Ib?U[wHM;t=m?YTQ=?I* l{-Tpqb80sx<TX-!r k2TB57pW3' );
define( 'LOGGED_IN_KEY',    'TUz]+ASe2{3)+2W(b1RGP%X$A1T+sS0d9B}riaoVyyZo:%m#*<U(C>8y^/(-3E*f' );
define( 'NONCE_KEY',        '*-!Nd0YXJy-B^?J[7jf4c5&p taA5Dv P7ji-jjVykV96%^ .sgHEgEK_cL.v9pp' );
define( 'AUTH_SALT',        '5tJ}9$~hI1U#YAv++<NthuX?y6u=w#~q[ Yd[C:{&I6}C>^nd3@j(V}nALev[I`7' );
define( 'SECURE_AUTH_SALT', '07)L|VXx8zg]39ki)Nm/BE$S1QHGSX0?(JaWmf[j~pi-,|}C!p.tu+8SRXIn{[t=' );
define( 'LOGGED_IN_SALT',   'gw:|g#t)WDiw(<|Pw`fqXo@x(wwmAx7M;zzeAwMLVkDFPbtYr+3Gdq4p7mgBkRWV' );
define( 'NONCE_SALT',       '_wD`v]YA1LAsGv>d,yQta+oQ^PX93$ Ab^t1>#IHC/X7h}`S;(?AC8 #JWok3k7W' );

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
