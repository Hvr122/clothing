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
define( 'DB_NAME', 'clothing_db' );

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
define( 'AUTH_KEY',         'OG<aFuLfkioj0%nVZ>Mw^=}2X`bd%Xt}p6owG-G?d,*=GS8Q[naq<`E(s=m(719*' );
define( 'SECURE_AUTH_KEY',  'W;l}H^zg?8b_]$`!]p;xfw:-CvOz=m4s7b-q.7@Fy*=8ZkeZj`zz_NoBy,}$VsM~' );
define( 'LOGGED_IN_KEY',    '3|$LT>c#S1Z748A#M0B|Sc%esMuYuAs50sy=whjc)ol(2$Kj~Bx>H+Ao-o--As:V' );
define( 'NONCE_KEY',        'OLq4)fC_nsX{IHOV(!CC md(RC]&it`)W^BWiM,ZQV6WCVh,5<J]hBn>d%`7w(1V' );
define( 'AUTH_SALT',        'NF%oOv4[sm8()U3l;nQHFY]k(4$!tQWk;H]rH.66d,uZVbR,Bzsjc;$15KOgq:mv' );
define( 'SECURE_AUTH_SALT', 'L7lhY ;T6;gK^]|]5_j[%G4-BS*wHBOjELk8IRo_jRS^?;7Z?S}]SSRp}Jr.S9i8' );
define( 'LOGGED_IN_SALT',   'q6r--i$dyjSAb}pK;Y0t?0+A9ck_#?>PyCd}Fhk=2/LiNpXN5)-}[Eob)yLC@Aya' );
define( 'NONCE_SALT',       'VW,[!P9*N|?Sd>-i@%Y0YFQ//H&~yPXB_(Dn)%;jwhR=3R(=DYm?#*LSF!x!z>-r' );

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
