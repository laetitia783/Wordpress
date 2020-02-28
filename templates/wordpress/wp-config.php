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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         ')mymBro+t/EOUq5m/4eej0r_INc%h[ dGM]nD1UtO;oH@-<OZ[A|cXA9r)aa|)ks' );
define( 'SECURE_AUTH_KEY',  '^`Y!4nkVM}x$$=NZRLWb=g*6kdqD8}FCVeh;n?(i,X2k4n~X3VPDWKr,4~c2D.&E' );
define( 'LOGGED_IN_KEY',    '%~^GB!{TzPJdH#zCNXm-;}-$_G{k/,h1zcf4+lf_N4tz^uZIg3w,M|jb%tmgvcu-' );
define( 'NONCE_KEY',        'I2>vH[{crBEh6g+1+cgin=$#`rO^B]6r_xM^$n3pJX5YYsd=E$_q- ~tjcMT>$d`' );
define( 'AUTH_SALT',        'D[N%[}r4{x=`p>>K}alj~Kz~I}#CE8e&Sx%z9fT5BrTl}R0dzs_,y2opYC|Y,B*.' );
define( 'SECURE_AUTH_SALT', 'e|W.&R1~c#tIH{NK~R4t*%|CtyI^c`{1A$+!h`hms%GdzFsz!mT:JhJA!j4dT0+E' );
define( 'LOGGED_IN_SALT',   'Y+51x}T`k@@AUC9W+ G8DSU>8OGC#Z;c>kZnSl}|5|PlcZd<fIIRD,[a4Pk*%M8`' );
define( 'NONCE_SALT',       'f/mhwY+m}{nw;EaGm`}6^eZv4`!2I4rm=7[QSwjU(BaNBLw!%S1D,%ZM2Ct~%@QM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
