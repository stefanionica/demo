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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'demo' );

/** Database password */
define( 'DB_PASSWORD', 'demo' );

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
define( 'AUTH_KEY',         'qZ*z[f{W(6lTph `w3wQ;8QukGY?_A#<<`0$}>(v.p`l,s@P$R!@:O8x^?0jM$3R' );
define( 'SECURE_AUTH_KEY',  'a+uS,,HZnz%HRdUY?L+h&U9|Qn4mqsp+CJB`]u#Df/{/uobF9Qx=._:][crweLn?' );
define( 'LOGGED_IN_KEY',    'Qk>W<@A_Ck#HOljs5[VVqynyiL}DI_$sEg>rg[(bYHS.jvJ/h^&G?m5=zVtt*uKV' );
define( 'NONCE_KEY',        ']jESjTx$R:]SI?8u6fjzjMBdsLl0%twM%5%L{%Xa_/JC ~0(h8G&o^;1mL/YZj]G' );
define( 'AUTH_SALT',        'X,oL{!Ltj|P7=U+4&aBdr-D3j1^QVS>]AAVFfAuhG0A~V;aUB*QEK*4`P$+w)js]' );
define( 'SECURE_AUTH_SALT', '*mljf}Gs&mv$nQqA`KcK*c+i+f=TfiHC%{ivx.em&YvhadAv*BB,W/=t|CRO<Xf5' );
define( 'LOGGED_IN_SALT',   '!`=E+Q@kh%%Eqj08HgH-kC^_()wvR=x[(7N((LJYvS+]ZkOMUCI)@SwKr^3E1!9]' );
define( 'NONCE_SALT',       '#c+Cfi.%G#-t`6NkYX#*YRtkxVxz[4{p8EK7IL-?06I;eGEJs(D`w/{CZ;J>D#a1' );

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
