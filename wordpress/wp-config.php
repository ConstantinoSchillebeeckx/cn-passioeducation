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
define('DB_NAME', 'db213837_1clk_wordpress_KqcdFYkGgMLrhqP5');

/** MySQL database username */
define('DB_USER', 'wordpress_htPvAc');

/** MySQL database password */
define('DB_PASSWORD', 'uBDYhzfJ');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s213837.gridserver.com');

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
define('AUTH_KEY',         'bKhtX3jpkHUdIahbJnuia6OYkFQ8T3tHAKdT8rYPQZjCyrZYTYh0CGWr27L1f0zK');
define('SECURE_AUTH_KEY',  '3aO0fEp0IsjsK5vSx5dAEXJtkvOGyGbgXBioE4lD48KSwATAuver4bbyvFfPDOZ2');
define('LOGGED_IN_KEY',    '49ABJhvRoTlQBmCBV7jPwpFFOct07NMGa9vbz0b3RuzBt8DtJAQSqsQ0koeC5NxH');
define('NONCE_KEY',        '4lEwVDCIOK9XlC15erflTgTdkI4vj2NHlPzLIk20C1GRbojQfUcURUf2RyQ9l7Ed');
define('AUTH_SALT',        'CJiM60a3LarIjmigkaQnesyQR1ORxheNDm73h4FF8Px7gKxbEOA3TnOSvcGzvm3y');
define('SECURE_AUTH_SALT', 'J90QOdnCJJLXzphS4kHOz9MRGaoHmdfaJ6vB60xdgEqLcxydn08WA3ykhUb8z1EI');
define('LOGGED_IN_SALT',   '16dV9d57tMx2XhMytLTqfzlFabf46yuMiuEOwuZLYIxkX0lEoyTROOp4rqVvdt9V');
define('NONCE_SALT',       'vihYv9mrAs5cASduL7HjwaquLQAEEd9uACj9JbLNHfJrCBrHQcH33D8TWbJoQPQF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'o2gu_';

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
