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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'humescorDBpgavm');

/** MySQL database username */
define('DB_USER', 'humescorDBpgavm');

/** MySQL database password */
define('DB_PASSWORD', 'ir4MGXUOgd');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pi3mX^qEjT<yM7rf3F^yrvnI7>}]_-pLD591tia+WPH5xpime92#*aTLDH.+tmD');
define('SECURE_AUTH_KEY',  'o!wK4kgZ[|VR8~khC[|yuEA3jbX<,$MEBrjfY>^$MFBrjfB>,gMF,rjJB3kcYQ^@v');
define('LOGGED_IN_KEY',    'Tq7<XI$j-l9[dtSKD91tlha51]_~aSOH9~xpiD92;#iaWPH#*xtlH92;pieWP;#*x');
define('NONCE_KEY',        'Da#xH2mW}@N4!VG-k8[Z:~O8sd1_VG-h5#B3>jfYQM>^$vQMF73vnjcU3},$zUNJ');
define('AUTH_SALT',        'Brkc80>!!zrkJC40>kcVR}|@zsNGC4yumfX2<*$XPIE^yumfA6{.fXTM<^$unIE');
define('SECURE_AUTH_SALT', 'IilR|wG1lV[wd:hS#xK5lW]+O9te;*vg4,zrkFC40>kcZR}[!zvRJC80sogZ40[!');
define('LOGGED_IN_SALT',   '[|:VZhoZdls-4CKOVGKSZ~|[18|:5CGlsw~pw~_[OWZhSadlt15DKO9HKSx~_]1,>');
define('NONCE_SALT',       '|oo@NGV!0w~|:~_[15Zhowdls-~CKOWGOSah#[19D:5DHltw~#x~_]OWahpWeltx5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
