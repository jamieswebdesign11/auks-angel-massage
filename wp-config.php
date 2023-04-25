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
define('DB_NAME', 'auksangeDBa7au');

/** MySQL database username */
define('DB_USER', 'auksangeDBa7au');

/** MySQL database password */
define('DB_PASSWORD', 'zruuzlrIO7');

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
define('AUTH_KEY',         'ngJzJ0g8,VBrC}yfjQ^nEub$Myf^Q^nEfQ^Q7Dte;xH~l5#S_p2mT.qAxe;aH');
define('SECURE_AUTH_KEY',  'Jr4^YFyJgMvF}c}zR7n8,R6<XEuE{i2*P6m^Q7n7,b{yIjp;+L2i9#W#tD]T.q');
define('LOGGED_IN_KEY',    'DlO-S9sD[ZGp9#W#tK1h2~O9!R8o8>cJ@J4kRzK0g1!VFvG}cJjQ^M7ub{bIyf>Y');
define('NONCE_KEY',        '5ac:zJ-g8kR!RClR_S9pV1hN~k5^n7>Y>vM$j3^Qzg0gN!oFvc}zJub{bIyf6mT<T');
define('AUTH_SALT',        'p1S[WCwd:WDtD]aH~O5l5#}vGzg0@U|rCsY!o8oV[wN@k4kR7,U,rB}f3^Q^n0@N@');
define('SECURE_AUTH_SALT', 'Im2*Ef^Q7uE{b{ya]xH;e5_S_p9]P*m6mT;xHxe;4!R8s8[gN@N4k:-G1h1~V|s');
define('LOGGED_IN_SALT',   'y3b{yI*m6nT.q5lS_S9xd;eK+D]aHxHxe;+H+eK~k5!R[wGwd:-9pW#WD-K1hS_>r');
define('NONCE_SALT',       '4Y}zJzg0@i2*P*mD]a]xHqX{uEyf6.T.qAP6qW#XD+i2iP.I2iP*P6xe;eL+iO~l5');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
