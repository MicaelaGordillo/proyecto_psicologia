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
define( 'DB_NAME', 'proyecto_psicologia' );

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
define( 'AUTH_KEY',         'iW/KB)IGniowuJLtcbt;gt!!?QAF@}W:>qzLtJ:v%J:%6AxobkV(*lMP%d3#5Oh?' );
define( 'SECURE_AUTH_KEY',  '?Vbal6e1+fu!BN<u)`OPi|>Ct*f9}XYJBNu<<Z!GN*qB67$Jp[N~T%Wi=xSu6ZMU' );
define( 'LOGGED_IN_KEY',    'iCc@qK)<^>a8)q>^[Q]O1xxDeh%/|Ep6Qfjz6TNKythP kr2/0dUr20$V6F<nB9s' );
define( 'NONCE_KEY',        'ra-xdyG sJ7nF.=B7o|gSio4%b+wvl[ ~aqfUkTO:aM2qkawo`YN! >2Ht`kFu<n' );
define( 'AUTH_SALT',        'Ua&?gU}I{^lKH|u)B]*9ihv?mDig4=hT@pqY+iLg8L0Fuz3;Ay17>=LkGWTFz+}Z' );
define( 'SECURE_AUTH_SALT', 'Bg;Sm}v=^BE8Kg)=z`uR*RWR?ITCB/;HqQ@-&j xiSX+pd@dY }M([Ca)mkKCBF&' );
define( 'LOGGED_IN_SALT',   'qyB,aOE,ObYAx4ww&h5 VTe%zGM5f5*]K9@a,AESg;2P]_e2.zu.QEIrPaX0vO6j' );
define( 'NONCE_SALT',       'fjO$GCY6h7~)e81:.8+0?47 ]fN-R$@aEt#7[=`QE,6qM_u}V~Q>[put3#{C]>AI' );

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
