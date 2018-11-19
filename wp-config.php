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
define('DB_NAME', 'soundblogChild');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1^.&h0S.Z@V:6mEmql,%|Lu{R)lN[2c N+]qq+u+hx],GXU1Xj7tV&:v/E/ZcQ$9');
define('SECURE_AUTH_KEY',  'Y=Fcg&M3Vy,4Y/p|~PkI+:!phrJ7-i!JxW^sw:pYG)r!C##,xO.<vmllTwwLJf24');
define('LOGGED_IN_KEY',    'x%iGU|^i(p_xCC/ 3RQ>mK:2+2eY_!j`c?+m7g-/v#3<eMqI#bLQ 6x%GZ_Z*e,w');
define('NONCE_KEY',        '_{Df6sc+6{ca4i@n!Tu_:8[,8cFnh153l1yGX<nW15~$~C_73%l/9XNfCQBkhQ&*');
define('AUTH_SALT',        'feA)n?o]@7qF+&:0ypOI/]${2Z/2:;Z 4`:S_83S:_bb3:RJ**G>xvVs?{[(j{.#');
define('SECURE_AUTH_SALT', 'D56bl:8/`$H*{x#-j@Ecqlr_VpPuqR4GI,HS(/r)VLLwA+B]>zHg|n}X/%QuW`zO');
define('LOGGED_IN_SALT',   'gBzuzcNmArMG!|c2cj^H4G<:R!lM/*ZBO,=)aD@M/MX.M,ggL#u]2w~Hd#omn%#J');
define('NONCE_SALT',       '5e^PoJG+nz=ABhT^l$EuVnOMLqC3QXTUEVw]_%R+XQPM>et:qy{`+oJR~+].bT}q');

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
// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
