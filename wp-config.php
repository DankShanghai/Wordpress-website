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
define( 'AUTH_KEY',         ',CtG:j7/g,`m[YNfaV}bxE10jHsvqdjY#<GJ|^zhH!/`Q^>t+49i&G8cEP{2>  e' );
define( 'SECURE_AUTH_KEY',  'vHw;Xd$yc^QWhL*mUKU@&&~7B%)MS27(fh.JwDc@`n!q Chqizxgll[6`Y[}J^[-' );
define( 'LOGGED_IN_KEY',    'IxSNT97G}uB`Uf[Dk_-OlhaXjQ$[`Ldi8}J[)RYX=%DmroW6$KE7#R}LutNecSVS' );
define( 'NONCE_KEY',        'hO8GwY)Ml/Nd,cK3zw2xcAunEHX,%U#G5@4AdP@s[O*t`hiDX&;JKFDC_$KJnX.G' );
define( 'AUTH_SALT',        '[?<J& &#<[:7SaK55MJPT$O}GvpxWG%1k}vf:g]ETlGu[YQu$m;c1N}OK/#>fa%b' );
define( 'SECURE_AUTH_SALT', '2_+05}g8uT<880je*s_hX8G>+(O`Om=s_N<}M6CU6h-oEuU P;K<(=YO3fPN`Mep' );
define( 'LOGGED_IN_SALT',   ' ruz$ne#],?rsy EF[d<7Z6=~[q`XhjvA 2/SpOwL@#nwSTo4baD/75&Nr/J[l,&' );
define( 'NONCE_SALT',       'w1Wx-`LYu?WTerxI7-V8-$913i<.F;@wjk*FP/Sb4d7gc#3)pMQ;3&r^YS0A8?Bb' );

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
