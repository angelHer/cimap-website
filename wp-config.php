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
define( 'DB_NAME', 'cimap_wp_website' );

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
define( 'AUTH_KEY',         '5O#T~, J*)QchJ0l&gyD@3#;9na#uB=|LW-%[pdU`TDZuk%1~-Z/GR><f|e.zID%' );
define( 'SECURE_AUTH_KEY',  'Fe{)_lP&@a!P&-lly2Od!f:,wGDh[Oh)rA*[`*,EG?N!X0{U~<Gzt [>=z1L*d.n' );
define( 'LOGGED_IN_KEY',    'CvgyY+d(puu LRH`iJDVJJEb_<CAmT>3$+3O1?h+XSW`.ju,n/X#?%KczQ{|?eym' );
define( 'NONCE_KEY',        'GJa$c0`s@c>xK9,whz.`/I4s~Q!C6IP57a#y_?G>uI!v@:Mvoa.887,jIgYU+tG*' );
define( 'AUTH_SALT',        'B yQd1x`;{i5s8X-ryDIrg*a*e[P.a_m:c!dkU#%?/q{u$^E^:0_sE.MJ9p&$H_0' );
define( 'SECURE_AUTH_SALT', 'J!9QWA-j-v3tVn78{I1;C3;DLrA4yZO~qArWf+n0N-~?Yflf!zDo7tS025~[YL^N' );
define( 'LOGGED_IN_SALT',   'WE#`wZAr};NmKo8XoJp27gY|PhSsJ]&6qRJ% .2^gAGxk{DfYw}*}U1d{O6tAZ&N' );
define( 'NONCE_SALT',       ')-5,QK_i.&Y?T~E%:C!&tC4XCp(y@{ 7Suh[pj 2nG6/pdq>!4,G_O-lM`ql-pF`' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'FS_METHOD', 'direct' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
