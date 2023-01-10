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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tradacompany' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'btlZ&?|AvusMM}ha>=MOG.ZJAO>!@TW[#l8_W4!O^^ WNw3}#a R`n*>a<EFmM(g' );
define( 'SECURE_AUTH_KEY',  '(Yi Tm4Ke~rC%BzD-!RHw[TN] ,7x]y{:zPKKBUWS)$u[@G4$Rxy^]f3%HwT~A(;' );
define( 'LOGGED_IN_KEY',    'c`:W(U)_6u&rf;8`o]U^MaR*B%yA63L]g:j{GJj8,=l0oaaCmSqxDQ`-6(F37dLE' );
define( 'NONCE_KEY',        ',|tp.88cjGV/dW]5cnuNBpEIPF4hI2V^xWtR>nUa5a65,s0Cm]XB%sRtOPMG-,iP' );
define( 'AUTH_SALT',        'L5.(BkPZ_[Ws%}a-@86.{T=!E[NySD3hDx>]2ij;~ghAtCU2. bQWp?IP[bH[7f]' );
define( 'SECURE_AUTH_SALT', 'HL/d$^RfcBWzt7i8qkYD00rXN[5<bQCHgG9W5Ul`EJ/aC;k]kLTa|!%#t-N-)kOT' );
define( 'LOGGED_IN_SALT',   '0:PV5ag`W=Y3dt^W+fw=v9FSX,BMx+jPb|Au8-81+@YI-?Pg&](Xk( 2E~ZKVHx4' );
define( 'NONCE_SALT',       '?ymP.Yb*/R84r8HbgvP6Z)X`cbZ>I3lQBefWRM>^S{_Su>+v&W|tx!!D{OyjqSmC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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
