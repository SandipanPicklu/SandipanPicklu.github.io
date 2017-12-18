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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9gb<|.AAt#YB!N3qbn5l-|D-0+mCPp7>e^<(XyH/Q{b#3eJL%T95sPq6~wPcpqhK');
define('SECURE_AUTH_KEY',  'htury?I)Gmfq+^oh}f!Ak*Qy]@=1_S6uKoA0/nn,;^Lfr8Mjbs)<`xv.-% BhI3j');
define('LOGGED_IN_KEY',    'qpGKNQ]ZLl=OND/^jOYy`IMS4l,{!|pgCZkQ#;hz}fHaa5O|%X=/{5c2b.wRKwIv');
define('NONCE_KEY',        '2Fz3|V.Gz.:WYrd/VnPi.frW2C(-cD_+]Qk+ViaB7c$4qSVb@b70#@0@C>[08A)^');
define('AUTH_SALT',        'm9<D8W7|iYs]f/c@]Y=yMtq9O>-(<>>ES_[H<VM>L%~pMsp2*8/68T`r!oWl&h+4');
define('SECURE_AUTH_SALT', 'N;>VFtfp7}bhqxr`8dTW/{J)]U1P` OsmItOt{Mk`gT!ZuzMpnZ%~+0.[Kig]!M0');
define('LOGGED_IN_SALT',   'P;n-srvM_w~03HvyM]ZsW:M[g))G0GUQb(b4#VUI~nt[O@in%#piE_ml [9Awh/g');
define('NONCE_SALT',       'qpIUdhDt7T/{)XKiKU*No-~+&^(fA1(omC{R.( `40R6o},m.17@5R8nhP<oA`pR');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
