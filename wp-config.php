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
define( 'DB_NAME', 'siseles-new' );

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
define( 'AUTH_KEY',         '#;@z5T1M:3ULiPKWYqUlX`|!a7$J  s>wn@0o_*]X^o)r,~01t&K8gEqjgKTWv,P' );
define( 'SECURE_AUTH_KEY',  '<(13Fl/^t<9|t_KnCF>WF?oQ:A(:_R2>!wA@`C0lp/{3sQV%ZZuesM,Tu2`$/.0R' );
define( 'LOGGED_IN_KEY',    'Kh`dLN|t#Tn;kO`YdY&)XNzB6Vp_rPBJacx[70qfw/tlm/+*q`jU$7wQeRy7~?vE' );
define( 'NONCE_KEY',        'v_Sn89#<uj>o As7+?$gAc3BO]V%c2:e1D.M$Nf&E78BQ$XTi(M4cqRQuCphMi[a' );
define( 'AUTH_SALT',        'Cb[Ka/2A~r3 L>j/S@LA|e2h}W([UWH<Ma=wq*=|c,y=y-@PQbhHnWUpUY*=%3:4' );
define( 'SECURE_AUTH_SALT', '=D`It:fE)I(8~;b-u+DJZO|sV>pPbI3{yH0ZzVa^LwH MF!E(<WMs}^n{{m:KUoz' );
define( 'LOGGED_IN_SALT',   '($NqyI;Yn0(DbciSb)WMwPSWy(RLd`O8JyXT.>5t%deP83y4/ +.n0&VAq$LH:[0' );
define( 'NONCE_SALT',       '<hh-RW;T=r|K ok(%%/`m1an#M{$AkfU!R#t-[^,ol=&y=oz)%/?`9N8<8CR$8An' );

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
