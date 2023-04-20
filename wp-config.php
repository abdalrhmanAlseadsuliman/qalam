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
define( 'FS_METHOD', 'direct' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qalam' );

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
define( 'AUTH_KEY',         'b8_^$Fr0GSNg(4kwnS1YEtpIubhT!vn,FHe%=dA/k2iv+yekUAIM(Q9@]7*.@&Ik' );
define( 'SECURE_AUTH_KEY',  'Bs=JXdWE)v>;+kg/.$-}mBeE{c]s(:m~3.!%#Qi VkU5u]O@Q<9pxiV:(39K_rYm' );
define( 'LOGGED_IN_KEY',    ';PPN14Qtw`QFHY%_|zFl/1 hn?cQ220?Y.u@kS<Rk6k1l;_UbV,6q(mc#MkhJ)I&' );
define( 'NONCE_KEY',        '!bcY&|3@<$7+u8ZKnA^o`yztCl16a@ast`sClIY{lzPJO.d6>s]W`u+9H+W7dz[:' );
define( 'AUTH_SALT',        'pazYC<n@Lk&mv&UXYVfnb$?wL4dtDAIiGJwdlqBdz:=35sR.e#D-QUZy 9T?,y1/' );
define( 'SECURE_AUTH_SALT', '/b5)TyT&uA|2p2+2/e4PK9twXmVd4>&<bft&~p5S,/:^3MU)$znGV+]5LJI.uNn1' );
define( 'LOGGED_IN_SALT',   'W;F$!V05xH[!=6i~%@lMsb*^&iY|}fb2c6(7zvGY`?Cppv.bpX!5j2-;jMAIiP/1' );
define( 'NONCE_SALT',       'et/#h )/[5Fz`cLX=:]IEfj.=~&!H8^P2|98U;r[ihavZQABit{vX1AvI1.FjPyc' );

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
