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
define( 'DB_NAME', 'o5y245686415526' );

/** Database username */
define( 'DB_USER', 'o5y245686415526' );

/** Database password */
define( 'DB_PASSWORD', 'hCc9!i}qu|WVp' );

/** Database hostname */
define( 'DB_HOST', '45.40.166.186:3309' );

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
define( 'AUTH_KEY',         'U+pJwEGKNGcSI7A-hqwC' );
define( 'SECURE_AUTH_KEY',  'q_vZY$z*xhdh4OR$&2vc' );
define( 'LOGGED_IN_KEY',    '72GEKXM(k46b1K3HLQdC' );
define( 'NONCE_KEY',        'UHVqfGWcdrm1d67#qIMG' );
define( 'AUTH_SALT',        '+m@dxFn-)vw@RMPyV&Sh' );
define( 'SECURE_AUTH_SALT', '4%3n#t5&*6Gjf@9NSfcW' );
define( 'LOGGED_IN_SALT',   'm8+W-(I-tkW-mj(F7VGM' );
define( 'NONCE_SALT',       'CtNZ/Vj&M)0m1GqH%rdK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_k8kq4m6a9d_';

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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';