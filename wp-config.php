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
define( 'DB_NAME', 'wprueba1' );

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
define( 'AUTH_KEY',         'J@yu)1(l<vnEOi]bmf}_2O$E /Ho]*;xQ.UsV;zGhe19TD;%.GcYPP,O9pr+WbIk' );
define( 'SECURE_AUTH_KEY',  '];}H{f<1rWnF2<_B$My?Cu.aEb];3UUGxR(kNZjuC<:X+v3eoF]b.c3iO#w=D)XR' );
define( 'LOGGED_IN_KEY',    '}SfJvsoGgD{%o$e!#jK0~!yApX|OV4+&[Lbb_*-uz&c,R7[lVu#3:ff%C@_{IicO' );
define( 'NONCE_KEY',        ':`;eOpS*G7krowmF`pXBN?[Lm[8bdL!O/3IL[EIl<Q7x~AV}bh/.+Np>vWFH`F>g' );
define( 'AUTH_SALT',        '4*H8}>4ytwLNgD=}IpVJ)PFVmYiFDCwzeOe`=Pk%.]gOEl>Q(qY+%:h 2877c6{7' );
define( 'SECURE_AUTH_SALT', '?<%<d@sf<kPA_9p`QA9syr@5KAl]V/UgjLehTpWGH6ycNZPb%:D7&fc7,t%L%P^d' );
define( 'LOGGED_IN_SALT',   ' >9qbg$Sikd}n%GX&;&]mbMZM3~30w-$$po4y^B5.hA!_@{?iSReU5@U]I}l^{10' );
define( 'NONCE_SALT',       'QGVN~6N~Z3i)O|I=%gvlApgWl ]Vohs6*DT`[XeSfoNke7F(E-ZMFT3A<pwc(,oV' );

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
