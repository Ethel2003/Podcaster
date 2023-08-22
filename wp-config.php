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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'podcaster' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^VMJZ,!:iP=iJyl9:yD5wx!ix/>%z1A%l]CgP>/p*(g;^PE<6gq<aep*djr<^eG&' );
define( 'SECURE_AUTH_KEY',  ':.^ITpKpv UX&nZ*KvNUAFAXXl<h.>7Lbo0%IL{S{n4=%a]hf)4uKyz4;$<xuPJ-' );
define( 'LOGGED_IN_KEY',    '`o=*$#w-o,>SZou.I]~,CO0GF9Poe1QBRH#Mlu`n1&426rRL6,484$$do5_yh`!K' );
define( 'NONCE_KEY',        'a]-iF(,(Fd^s= nEu;82_f/]tQMAB=F|>3hJo)qJ^D#7dFrZyKBK^^ZPx5w8y_?L' );
define( 'AUTH_SALT',        'SWK%InDxHVP)?E0Uni:T2)IZ^<ilT#{YvY4yZcS#j~N8A[rH_|cNzd4wOQD?{:uV' );
define( 'SECURE_AUTH_SALT', 'wgw8pE4u&Ig2&M(h3>}hgQm<=8Mttuxr{nMSQaZ+D=b?J~b576m7da%j[M BH~F8' );
define( 'LOGGED_IN_SALT',   '!7>)90wNnDAI:t W]v_`:o+M)}8^<pqLaalPuIN*l&><FYWOcF.rwgrI+.#E+3 l' );
define( 'NONCE_SALT',       '}CWlZm2APd|FgeIKFdfu55u@XYe;e8u^=bq0o0CaNoUuK2;gV;)SHhBKgF:!Y`BY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
