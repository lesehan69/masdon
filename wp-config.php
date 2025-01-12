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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U$nI}.I/O!?F:MY`bl).E##aQ-P-]J)) JqrrDDzdjMEnJ{qb%G;ctPVQnetNdWJ' );
define( 'SECURE_AUTH_KEY',  'hs-3Lx?CitQ*~B}/xKXh`,nnhS`~=V1|wDsg;s};A>dd8-pD>].H6t7R4`S(TbpI' );
define( 'LOGGED_IN_KEY',    'WGG0v[HC/>m?e1S,dm;&-|$xR=&D3+]&.6_TPG|xo[B:(rC=]>-X%840t{d]guPI' );
define( 'NONCE_KEY',        'D-=Q5Suj&Ijv&U42dDfvi[N:M+&M`Y0qe!2<1Rjfxt)c4J.7z$!8aa[,-H~+K8Im' );
define( 'AUTH_SALT',        'I>Z6(:t8f8.$!Y-!rGLZ4rg{}y__:3x=fi>Q.]5mO|~+l @,+,>KqrNmv9GfW;c/' );
define( 'SECURE_AUTH_SALT', 'm9-f9e-r<q2ld8E1Q`=puk1^1nH^#rGXM~ARA`;5GXK[U%)>an-!n3Et:JvQ59<m' );
define( 'LOGGED_IN_SALT',   '6hNoc,dYg]=3(g~FPVyH%Y:n@=brcjfEt#T#EHXjxPO/j+WB@g[IhUZWq68D|Y,n' );
define( 'NONCE_SALT',       'Y_6#pG#]j7DeNs[.S[SEl]T7+DzK]f+YQ[si(w9>IyOG/_$f@+t.Bx^Hop~h,<;b' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
