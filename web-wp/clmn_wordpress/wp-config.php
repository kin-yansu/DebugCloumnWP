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
define( 'DB_NAME', 'clmn_wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         '}& Cev~(zv<>r%?bcdQzyjS_<^=(P,IDR#;BDSFUS]/IF$vjU|3=n/!ZGUHqR,S5' );
define( 'SECURE_AUTH_KEY',  'qwFl2h]2Hq9}NmGBZ*`~?ASHh1P7b]{P<pc<X[)gWWhUrE8xU[-/n@vL?G4UR%k^' );
define( 'LOGGED_IN_KEY',    'YDIn3Jr>(xcvbx6q<(er-5({toW*QsBISv|mPf-TkN^fC.EL]M~2t? ir+N_MGF[' );
define( 'NONCE_KEY',        'AjUcZ&:VUEK(tzjl;GuHh+OB~. f)u/D1B+:j*9 rV:<rf>g?+mlrUk#OuKKR,wy' );
define( 'AUTH_SALT',        '<vlXqDan#sXkS{+4T91/eL}-!q|VPmJW# gb/TJSN4R<E4G^A$FKnzA9DSy5vReK' );
define( 'SECURE_AUTH_SALT', 'tqoseP;0>~<Av[$)=jA5Q]Ya&zC:[p)Gkl IN1UCBIcn1AaEp*W,pH6]kP*@@@pd' );
define( 'LOGGED_IN_SALT',   'bD}81rf^=.h!9WC#6kUjuj?ij>p:=WWP0YR&5yt7HGn:k<6OU37(wMvk#FyB;#so' );
define( 'NONCE_SALT',       'wVI|W8q#ZkODcDGumatd<`6Sh%B@l&fE1O4`[!k*6$md^nx^1!H9=qSf]Q)% tU-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clmnwp_';

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

//$_SERVER['HTTPS'] = 'on';
//define('FORCE_SSL_ADMIN', true);

define('FS_METHOD', 'direct');

# WP Offload Media Lite Setting
define( 'AS3CF_SETTINGS', serialize( array(
	'provider' => 'aws',
	'use-server-roles' => true,
) ) );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
