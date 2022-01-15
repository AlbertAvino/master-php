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
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         'aoBDL=y-5hK56&p?XG)3Sa4c;!/Z.54)e.#YNGw#cJt)!)){Nev%6U<uS;bsJgsw' );
define( 'SECURE_AUTH_KEY',  '*Pbx -y:hnp_`J9{G%fI$vzz ^gJk^`8MVGie_McQHf~Xbe[M;6i6|S(5//>QV:N' );
define( 'LOGGED_IN_KEY',    'vifmDIe=y;(`EgvaYUag5?q5k!P~5)J^1lZa^VRx:#I<~Jo,M7[bTuLVQdtfx#5.' );
define( 'NONCE_KEY',        'yFd_PIim#Mg>+kgtrIrcxzx$&nT>g)EPOse6D1U_g8ejq*y}}|e&(H%2xP4mLN2A' );
define( 'AUTH_SALT',        'lQyy~Q=CDqeIB ||ne0PA0ge18vK5,Pj2MakCYpX{;gy!JUzq@}%r<u0<,2?O_3X' );
define( 'SECURE_AUTH_SALT', '|-3NoT$F^HNp#<f2a5:SC^Gi8~|;[5Zu1e;bw[Pst8x#h>%51N*%dtE[lFdKqgAs' );
define( 'LOGGED_IN_SALT',   'p35Bv51^k*@w`;^0;;b}jjL;`P,*+yPTZ9);dUD8*H%jDtbJ8x0RNkWu2/Ms) vS' );
define( 'NONCE_SALT',       '2_J;mH,KZj.ivUxCbEIOz|1S;-r6u#?CvDF!}|yvX- NF:,a*B[duI}H2 @whY.5' );

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
