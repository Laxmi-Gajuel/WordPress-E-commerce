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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '%(5g]LX)gG.(:CzSAxwjJ?xjVF8:>p#[<o/u1zpPHDJ!TDVBX_Y#*9Sw&30YJwTp' );
define( 'SECURE_AUTH_KEY',  'XpK)pq,WGJIA%ix&g<S{E537]!WUziAd06ZgVknf]1_zU8i4;wfL6t:YsP[?|Qy,' );
define( 'LOGGED_IN_KEY',    '}LgA7A%0@55E=T,B!e^nR69{/F5t+7c6+`8XOuQd6P{=D.um)W+*,vH]i*B2FZ?Y' );
define( 'NONCE_KEY',        'c3/lR0Z/|qIXhg[S2>Qd&xW7^-7}2y2 s]^-B)*>Di8GL7;b=7%2~.7pm_sKqb~A' );
define( 'AUTH_SALT',        'Cmn4`$_-`I<mR$n4UzQIuoUhdWpG}4jcivX 8@4tYiH91Cvzk0! al}` -h86br?' );
define( 'SECURE_AUTH_SALT', '2{JM0so.3SV`ddEr%icam[&9a La ](A/S;{A%hqV&#MR->VZq_miBiL9-05J^D`' );
define( 'LOGGED_IN_SALT',   'U3Y`UWxO6I)p/6rNhYHP;Zi:K*-> 91W8P&@_QUn5)-Wc<t%l&6HXrId@*[!a~Sp' );
define( 'NONCE_SALT',       'fj EqfZFGR:j{;CX#&y`/8Fh`}a:<N1z26rTv]C>Ai)+Kl1^WyL;2)]ZtV[*:zQl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_shop';

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
