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
define( 'DB_NAME', 'smartcheckinn_db' );

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
define( 'AUTH_KEY',         'b=IK:k#k/:)KD!FoT6 <@Z-]U`mKHBQhA?ZLQ0bopesW2@uDIgqqeFPF|hW!Xb0P' );
define( 'SECURE_AUTH_KEY',  '<OTJ30i#6CJCd2)t83)a@}0Sb)&tY+&NMfWGlkTJE<L~4k?k*vU s[LxCNV$Ue</' );
define( 'LOGGED_IN_KEY',    'Vj?b)!JsM_y_bY#5aFPW_:zWlS0{Vjua!GbRDYT5|:hupp|P}P{;gcE|s~n??, y' );
define( 'NONCE_KEY',        'HO3%FNW>fTqhA~|[fL!^PM7)q`*nMsNNBU_ngfEqz6{(2jHNb9BLsSUCns0OZ_/?' );
define( 'AUTH_SALT',        '+oCMMQR;z8)?+G>s}8G+(qXfohP&{NFE4~XxX:omfo7M7vFpVpt8.5b(Vpd,$.e&' );
define( 'SECURE_AUTH_SALT', 'Ja~V)e_q}=#6hj*B}2BNz/%@ V6]#}pV|G_R5dibn-i`_N:cZ@(.mIi]ZDOv}R4(' );
define( 'LOGGED_IN_SALT',   '3,@zX5cI|a:)R8*iaD;Yn:o)Z3;`X_{;Gdqa.;&PjY}8}i2/ji,}8&p<*:~+7;VI' );
define( 'NONCE_SALT',       'R#N1m&h{OiFus01wnyEi_2%0mpIidZDsewWMFt9s+$YoI|gL+(_frkm9Q+=E=9]M' );

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
