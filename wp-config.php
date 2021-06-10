<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'progressDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K<t[=#YMU:O|IKv}_VtS6J3R0C.m7#UlPr,hEnvrhq[_1i`n+q|)G9>f2jJERC;J' );
define( 'SECURE_AUTH_KEY',  ')EstF>k3{Y[Mj;<j!6gwOH,<([{T1}B8zkeqhZoJ&P@=AY$2*leyVUwU3[^(LH:?' );
define( 'LOGGED_IN_KEY',    'Px1GW R 9>jVr;X-27b%~PG6|`R ,MhHzJ5&* 1G$Km&rnm~%p-z}P|BdC FyA|(' );
define( 'NONCE_KEY',        'K2!fhB)o&i@111K,*r?^W7z/mj5E`l9Jj wPqApDBP3W=gDU5w.?OzMf#$?r95~V' );
define( 'AUTH_SALT',        'aZ,~<!s&7,o_^&LlX6)y] ~+QU%,b1ghd&ubZh.=CLjm vFtwwwPpdWLxe)@/E8*' );
define( 'SECURE_AUTH_SALT', 'aW3M=ir~biUH$1~3f+p? sh(q#_dyv!1CBS&s@!yKpgy]dv} co-_i/-+ZCT6BJ=' );
define( 'LOGGED_IN_SALT',   'euoN<1pBmSf,4%${)TQOJ}y1;uFP[S>]0I+A]XwbOn=$vTLA2nSv8$tmqN7^B.Xy' );
define( 'NONCE_SALT',       '.}&6SSVpcAEhn&dik[5PlcTO`cG:NX1oavzQYo;HHvp3b}Osklr&nU?CVt5CMP?m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cfsj_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
