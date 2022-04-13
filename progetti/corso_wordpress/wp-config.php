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
define( 'DB_NAME', 'corso_wordpress' );

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
define( 'AUTH_KEY',         '?@(y~u.{PWBFiPS=h%YcqY4JGc9 Ux~8DH aB?!_V:(g-hkOMoJOe>e]J#x~uq]1' );
define( 'SECURE_AUTH_KEY',  'SW+[Bo$56.I<myZ91C<[GDJW0Sc~M]&ono{_U;2y84%3W`cfM<x~{#Lx@y4vv%;Z' );
define( 'LOGGED_IN_KEY',    ',vTDw9GF.G75U&?QTCW<sB|=z*A>^K2?O]J<#<(~y]^*6THtz5s%Zj9xAM;J7B]h' );
define( 'NONCE_KEY',        '(VH}B+}+=DFa$K`k6dH&fyhKEX6s(vrEpH&0h!~z@cPSY3>if!0|nu]5D9{$QV8b' );
define( 'AUTH_SALT',        '~<jF+~-,2JG>91,pE9bY7tX)-:}A$gKHTVb3?WZ723@z+T#(=R]3t5&H6wx(,d{h' );
define( 'SECURE_AUTH_SALT', 'F?gWLje#Kq9W8<lm9Ve7rco^$h9~{-)Jlxz<L=TctH>Jd-|vsLB[5m@>wi9/{R}=' );
define( 'LOGGED_IN_SALT',   'CH5!/}|1e}|U7/BKa=8}#.8pbk`[H4fo)pvi6MgHps0E~iUwj%El)p78%63@@+%!' );
define( 'NONCE_SALT',       '^aC9]HVL;Qlq3}/7$a8):N3Y<Q=soC/ jk.kG90Q)6(/NyF#~%C-PVL+G;D&lLA>' );

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
