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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstajam' );

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
define( 'AUTH_KEY',         'SVY)K8N]i:dP3$~6|h-]Iz1qkuGlHNnt.SP48m6[3~pFP_di9[vJAy%gYnv.Oe>f' );
define( 'SECURE_AUTH_KEY',  'rP4U%4Iv;[W5r1)?;.^PZyQc>1/=Y.eO7t%iY/_{aa0=6Z_dG#tj!8h8!BK6Oq,9' );
define( 'LOGGED_IN_KEY',    '_sGse_Kz%dXkp~NKXm=-V!4T6x- @:%o.mZT[Ba?eF(G6^`t[+gS$9z-wQwcumG9' );
define( 'NONCE_KEY',        '/@d%n.SK7R ]27j<xvl|8fpmnD.;$]aW{cK(:N6%FRVw#E/SR4t(KpS%-S~W]2Je' );
define( 'AUTH_SALT',        'J6Gn2MB$&6mjy7qOK_JN~)clGM?sJ+!]Z~3B_ RBf47-b4m}D.~bs{K*ZS {TkC5' );
define( 'SECURE_AUTH_SALT', 'fVGG{FEk*J)Mcj$5u%VopigXYf_7N%)se|z~SM_Lz]q%1sv:/N-]HIOhx8UB.`=)' );
define( 'LOGGED_IN_SALT',   'U&N+(=@M=&uGD{N&Ikpg7iLETj4SX(Tr8px*`nHn;8.2]YeC>m~H p_*ZZe7jdX=' );
define( 'NONCE_SALT',       'KFl:M+/(&Aq.0NQ9L$*tarVC#)LDqu]b}C7N$9|SnBBqCo?S#^Hv-VZNA#`kUP4a' );

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
