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

define('WP_HOME','https://gorgasliani.com');
define('WP_SITEURL','https://gorgasliani.com');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' ); 

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          ';[z<RQ*m^ECP+-7.wA^9_RQYb):o8gG$^Yh&jWX+|wtdnqSEoW0zL7W&s!;q=rk2' );
define( 'SECURE_AUTH_KEY',   'jlco3coem~~1vN$;a9TUK$ukR}Jpys#>!~52G*ff8>Xo:>/A369FT{wEVtY#{crg' );
define( 'LOGGED_IN_KEY',     'pN@([:bdweSX%|;g.#/*$R9Gx`=j@wx{j?MUq3)RK|>dVOA3ZckEw[Cv~:dy`~VS' );
define( 'NONCE_KEY',         '. )wZD_:Y}S#{[*qsMdq)HU@9$^y(G^DWw~Vwm9{tQC2!O{<QT9YcRv,eQV(Y=/Q' );
define( 'AUTH_SALT',         '1:2YrCniVGGk6U/Ef:)]uI;SU)4yrZK 51%P%D:i>ylkY2S%-Sh)eVk0[e+aRnTF' );
define( 'SECURE_AUTH_SALT',  '6<,cyQA2)YWZvSpt]^?:ZacOp9Qr[$Z^q]#vP.?%+au3t4:&5_G[5!HTl!8XX5^*' );
define( 'LOGGED_IN_SALT',    'DS4|W-=r{vZRC9Z@j[CAGPl6D2  ZJFjIzY<[Hm/;nD),[C4PiW|1>pin>V-;`z.' );
define( 'NONCE_SALT',        'MVJ3?o+@wX EWQ[]u#:w*K*-i-({X^S/-zuRB8qT{,tlvB6[>s2~+`@]-r9Kj MB' );
define( 'WP_CACHE_KEY_SALT', 'gKx.13n2/:dZa^B!#:]pVN7T;l^Si[pwjvfoPS;|wJ<`JvmJ!EvM%9x$g5j!S==P' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
