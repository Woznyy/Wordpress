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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         'MU3`3ogxIO=%/$D0}zS<1ejpW+%Q0|~uL2GycSzy7KUq$@!?-RnJRoUj%p9#7oL)' );
define( 'SECURE_AUTH_KEY',  'oOzH2jd>(Y^={pkkx(nIYeRc5T<s#SxvdT!uFS=t2Sp}t,nj>>x^!Vz/dt[!%9,o' );
define( 'LOGGED_IN_KEY',    'ZKxCrb!27WyR/_dRY~e? d?`sgc;s^ xW8LZ58|:ST>^||SH6[;Sc%+wF+pNmcnn' );
define( 'NONCE_KEY',        'yZM-^qCcMwKUmqa5^&so83g<Xy_An&#bfx0q$7tDPN[;1)/{<+_hq)?H4HefuNeV' );
define( 'AUTH_SALT',        '~|773dEpkATM28 18^_?5J 7N> a-=S*t8LC*uub3u9o7`~s9H4PjT.E(j@ZIi z' );
define( 'SECURE_AUTH_SALT', 'Wg5ZdBlK6%6%]3ihSIP+pQzr|Tw(bl;I0MU&S@4~Bh<ECB&2>0<.|i+9)sTf1@;O' );
define( 'LOGGED_IN_SALT',   'Zf2sxt4_?2d6Kh&:9gU+N]4_lcpHYes.GYQ)M^(5Je6Fgw{Lv LxlvtUA<v5wZM!' );
define( 'NONCE_SALT',       'J8SrB527w)BLCgm4X{q8?X[IaUL>Gzg;k301oXgtpIwLpZqL >eb[D)~hUsJ>{KS' );

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
