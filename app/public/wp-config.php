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
define( 'AUTH_KEY',          'G/,soMF<FL5T9H@%XaLs??Nr44 ~{)H* yXzJNaN=!=C;g+}TObN-_wG|&tH?8Q+' );
define( 'SECURE_AUTH_KEY',   'r6pp-#D]BXU,.Vb(sqN FKUa%L.W8;@#[I){~EDlfmQlkR+;]ku$^CsO_cs56_~L' );
define( 'LOGGED_IN_KEY',     ';I};v&)<>#7Md%~y82%#%aJPu7oM$m94+>gN^Rs2*hqwdQo]ZuU#x[aXBAxS|>a9' );
define( 'NONCE_KEY',         'xf>/-pPV~{4%K~,ij#JE 0Lul79w51g6;4E0|X<u|?4ZKH;ql})I|K2?5l%s*oiq' );
define( 'AUTH_SALT',         'bHB>Hr;^xT)-w]EDMXC5SB-Rl^Z^fEL9P5y54zvp@VAV6_$7P{&{6B0lg.p&,T2o' );
define( 'SECURE_AUTH_SALT',  'qW7Lz;O73$LnO*&DlV+M^q&ge69D#>hmyakJi^}kvC KCs!Cz9oSA8RD2;KEN8%p' );
define( 'LOGGED_IN_SALT',    'EcfQ4j]ZOPqW!%^.(P/5)`+xBN=cM!XUR~fH*nDFveyCE*clfn=Eq6<&b_/kzccl' );
define( 'NONCE_SALT',        'SD8Kqa EJfWeb4UlC5ibm#%w!{ohJV_J@IM_j<ivXOKQ~5p,fV-$Tr1|GW?&^R*V' );
define( 'WP_CACHE_KEY_SALT', 'c;adL{hN=IRo)JJ-FUaHOuO^nk}Mv~xt2#|mQZr)S~Z,D7nH5$z0@qf>|z1AZU^c' );


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
