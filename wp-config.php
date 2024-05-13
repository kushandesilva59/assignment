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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         'Z,;JA+aFb0?/Y2~IbxuN_U2(d3*SEQfNFOn1]!V,gFgC9<.QbhajBQi[_}_YbDuE' );
define( 'SECURE_AUTH_KEY',  '0A317{tEszm Y:+vN2YrzKDN^`}+r}H%D9<^A$]@EqXWF~EEQO*1YdnJyuf@DGhN' );
define( 'LOGGED_IN_KEY',    ']@~w1FyW{)J>f5RQx~X|D#y)kF:S58+PdEVj;JjY+W4h[A,bV LY8[jy6^pnJrF6' );
define( 'NONCE_KEY',        'u0$`(!#Vbw:+5sIQBGNEdYn}kYn|Pjy6)!K/4vX3B;79$a>Str(1vD5yshLiK`NT' );
define( 'AUTH_SALT',        '~e-:/HC>{>S;_/T{{qTC.<s74zX0,pvTY6IJE?oQKQSUoAU<7R`$EEpCjWkX-*%C' );
define( 'SECURE_AUTH_SALT', 'U%R|yE`oJ]~dUWqSDGIUMH ~1ia^=?l(Bg^HKzSjs.7vOb?]Wd{GELQ1?XWVmSa1' );
define( 'LOGGED_IN_SALT',   ']1D~*IJ)RVm5GDQDpel!=r<.)U*Tb?-nvbWp+j?VNH>-tp1-OoMo/L w Hqib8+.' );
define( 'NONCE_SALT',       'rBb3D!BtX4t@~50;4x^ KARK[{tJWb;T<7YEB&$&c#!O[bGYQo.uq$)CebZE])Z6' );

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
