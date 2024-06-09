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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':Bg Gm5)Uvc*}Bn6Y7c Jmb?:hg<J`; pQZ)(*@wB`l=Ix<Bq24j}_f8uyXt&h3$' );
define( 'SECURE_AUTH_KEY',   'o4d;i@.qx<,mn7Q9O[V3C^iazymXFv4;2>yeU&ZR7pw5yUL~:NajV{|Xs@r0 vA,' );
define( 'LOGGED_IN_KEY',     '-c4lX0P+*l<,MaFZL4Y:H&fTtzwhwp_d=Z<r[4vl0sBV]d7@^:yF0PNP*QlulMQ,' );
define( 'NONCE_KEY',         '8_w[@teufClppJMAx,7,xtiwVZ/R3h%HV&8](y=5q;`d@bpTq`_fh&+B%$6{Bolj' );
define( 'AUTH_SALT',         'N#v;U-au}b``gR`Uf,i8wB-C]AW.%V6z4T*hOj$Hvn9w<UX[`8yWr(%;}S*vhB8y' );
define( 'SECURE_AUTH_SALT',  ':L8oXz4(5bDb*LHzBnb|Xb]fT>7VAnW6|C(VSr}l*_/Y@&8Xm;Kqx7|2p9~C8yL?' );
define( 'LOGGED_IN_SALT',    'uFp^m %i)LO&(2LH>*78g~^nC?[7`+gg{#!0vbBr5`r|qJvlE*<Z|%iYS%Y-s&xU' );
define( 'NONCE_SALT',        'us1Z63TQryA{koyxYyN4IN_t5$uNZl8Tb[i|DOp)wDxP|m3|y.#`<1v:1N+8SM~^' );
define( 'WP_CACHE_KEY_SALT', '&F`J(DSIoU(yF.$X5g;|^?uBF2{RPY(Kc5JmEniqId;XzMuz)8px.kXD&8Cx>iLC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
