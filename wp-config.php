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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_katjagaevacom_db' );

/** Database username */
define( 'DB_USER', 'wp_katjagaevacom_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_katjagaevacom_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';|*(Xk/s%.Y~[WK3_l_Kl=a%(4,M@29ZU=&A5]L~wlVtc(1gbDKA31kKAt1>;*97' );
define( 'SECURE_AUTH_KEY',   'hJ[?5!YL2<-vb2NL=f468`-amBDda^1 ,E s3PrEn(8~!Y9}YwXy%Am}S$|Nx7`H' );
define( 'LOGGED_IN_KEY',     '_8]vi<$;QL;XrV/Zc&,Q=:<:5#+nah{fLxc,;CBCiS-!w`] nKl9;:<p7e?UJyd~' );
define( 'NONCE_KEY',         '{$[W&jXHuEAhHrqTW{}?H}s&M#z*n`c~t`)^=c(2S40C*%8=6)vAZ+JuW#PuE4XO' );
define( 'AUTH_SALT',         'L;X6xTBnp.&3du35RFPSiypb0 jDd9cyk>;}>K3:hK^HOb+eDGJkm3{aG#{:qSUF' );
define( 'SECURE_AUTH_SALT',  'M<5X]`|75}5n5,rZUoHcl4B:CT4CshOxk3+8rT=IPnkI6Ufu*^B3gZzV@H6b[^=I' );
define( 'LOGGED_IN_SALT',    '67u1M/,gi6kkZ8_X|&Br(*43E;d>uqDbWTOd:K<q,bXbkETDocdz F666X5T4Hc.' );
define( 'NONCE_SALT',        'nR!xE#O,c> -J}yk7mVt%{4|6V#PvT`e<uHlqcMJ3%Jk$pEz:CfOU,F][%;;v>(p' );
define( 'WP_CACHE_KEY_SALT', 'ne`8g_#>2~[$>lyzR>5?%.r`Z`.HQD?j0h@tK+4]@tv]mnt%2f.1Ucj%l)r6/C8R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
