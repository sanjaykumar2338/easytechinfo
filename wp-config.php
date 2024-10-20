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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'easytechinfo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '`c7!U*dACl9%rz|3b4l:LOHTj`ydZEm~+X}(~JIBAfysICtlc.fl1kH4jv!s%7i(' );
define( 'SECURE_AUTH_KEY',  '*GZ!NIC;$`pUB(+| bC3J>]8>99dM;PV(X+Np!RF-vdg-WR~1)u+Uq~AS5`F;p{>' );
define( 'LOGGED_IN_KEY',    'jJp1>s8%t]{Ab2:LsW+o%j=!jLE%Y(kP9~_JxOj8?(H+:RBF FYkbN.QA+$5yd2M' );
define( 'NONCE_KEY',        'g*/2_I FcJTAa%Wfs(W!mlX@v^,a^HT?^uy.0tj3R]uU1lDnY8DXSKqIzmv,/ J-' );
define( 'AUTH_SALT',        '}vp(duwcDxLZMpT #>mwPQhXK)=d;[`qi0ly{jxG5{,!k7}?seBS$oG@d+eOEee=' );
define( 'SECURE_AUTH_SALT', 'RrtIBq-hx*!72eM5I/_r]1p? 7`ZQMw4eR <)k9LX=J{P`zcw@o>8?<]#w%g}75P' );
define( 'LOGGED_IN_SALT',   'v}SUIDBM]`MF0Qx?~W[n7FmKVNWP%Bp5(kZu4ZR6d,[OJ,z(8{UV3BB6vY:!s%kO' );
define( 'NONCE_SALT',       'R<z3*Mp#ulJ@sfAH7[ruDreQFt|H5FN_x/?WTh:-e&A]nfXgN*X0]Ly9@>&c_B&j' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
