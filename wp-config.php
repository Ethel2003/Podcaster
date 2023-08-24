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
define( 'AUTH_KEY',         '^R2fRY!t>uQhUWZMVcO_y{Ynj3`lsaUk[>a!<r`dw0*VkTbRVR]unWb`t,@-4:^B' );
define( 'SECURE_AUTH_KEY',  'KF3gE`%Y2oF`wj7B)sH[Wx>LZFFTjb[5p.w{]gkS4 *i!QF1n8+,(k[29ga;Wd>}' );
define( 'LOGGED_IN_KEY',    'VO*ml4Upyz&^&;~-6IVDnwPGiF[3QniG@W*PH2!<XiRPXF_zo}q.>J2W2H|;^)$L' );
define( 'NONCE_KEY',        'c^dm[$llj:g>l~l0ta-3*xdz}&5m&hZ:U|If/n(u:UIYdg[Q9fQ#A_bcVvbI@ oL' );
define( 'AUTH_SALT',        'f*&WQuH0)T0DE7;ZKD2@CD-!vVz{YRMrgXkZDx|&)-uYmMpU^oO8j]p3V{05K2n?' );
define( 'SECURE_AUTH_SALT', 'Tg1m.bY#*jjpfl!XWkbl=srgvKS15cT3owX:L!a0aR2x{jj4%nnMWA[Pw^W{eFB;' );
define( 'LOGGED_IN_SALT',   '+o|Um>gN{Hqvd^&Y7-5Z@*03co!}_KA.wP.6wY+BTEY<[es@}g9P5(Gn.5NCC+ I' );
define( 'NONCE_SALT',       'v(JTV^%A4jH/tU3}mW%khu0v{(z1?d;Hu7aD9dN3^t!BzLt/H^h7cp2=T>}K9uPV' );

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
