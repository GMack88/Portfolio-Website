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
define('DB_NAME', 'codemack_wp960');

/** MySQL database username */
define('DB_USER', 'codemack_wp960');

/** MySQL database password */
define('DB_PASSWORD', '@7-dpc6Sh4');

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
define('AUTH_KEY',         'dx8ow010f4uqmhy9g3prtiq0fuhinvndeefj9ldewg8dapviamfgt3tpprmh0dpd');
define('SECURE_AUTH_KEY',  'dfkgfc13fjpsqhqdoxjm0rljwcrrrupbrjrnzhf2m0khx1olie264ten0efm9hyv');
define('LOGGED_IN_KEY',    'mre0hiwv0v68uraczfmafdbyawx7pcaankmz35ftvjgcxhjbmnq8t3tabayesjjc');
define('NONCE_KEY',        'vwcnjblwsx9bzturnxf2p1dthcgnxdnkl4k1tb4neocvftcbtcynattrbxpme1jh');
define('AUTH_SALT',        'gkhfh391jingghmgivkunmxgfgspawzdxlk7bhhr31r9ilc2nrcfw8hzgcnam5ex');
define('SECURE_AUTH_SALT', 'mu9hvwctp0r7cvey3mulebmmftpustuc8oaukf4ydlqtgcvrgphcyp46dfg00jvu');
define('LOGGED_IN_SALT',   '8ko1nzgnhgdfsxqdm2kfmmw3bhhuubaucxy3ufb9wcleciknxwawmf4i3u48j0mn');
define('NONCE_SALT',       'otmg8bfogjepotcwyb1apezrmm16goygqrftcwb2qqfpigcfomx40mwrnfpdk5xr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp0b_';

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
