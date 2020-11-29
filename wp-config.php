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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', "citycollection");

/** MySQL database username */

define('DB_USER', "root");

/** MySQL database password */

define('DB_PASSWORD', "");

/** MySQL hostname */

define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', 'e8b377d33f722e898362f293531aba7771831b25c51b2d02e317fbefda0d84ca');
define('SECURE_AUTH_KEY', '706810b29b65b0e9ce5c69c9d195ad51786d3d6010c40fda630d158962705e36');
define('LOGGED_IN_KEY', '57bbb2fa350a14929aabcd8a0cb225c933eb381592675174599fd44c4dea17b5');
define('NONCE_KEY', '9ecb139e66a08d489ce1aa31f85b5567d24ebdc805d37b930b7bda8b3acae8ed');
define('AUTH_SALT', '58ec71a7bd2a9a9efeeef1b043c15cea1d6ec74ba2f6d78643d553c1e99dc01d');
define('SECURE_AUTH_SALT', 'a75c452d56986963bf9dc2230d87f17c048e7fd3d4bb7861d946e5eb9976e3b6');
define('LOGGED_IN_SALT', 'a39c2b1e4c229d010e1939a421efff4269713b66089d6858cfcd420b77e9da00');
define('NONCE_SALT', '397961e8ef7ce5f87c0f7015a6d8b2abe8e50191ddc92a969015685cd9e7173b');

/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'GDt_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

