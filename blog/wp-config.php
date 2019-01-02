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
define('DB_NAME', 'str90067_wp10');

/** MySQL database username */
define('DB_USER', 'str90067_wp10');

/** MySQL database password */
define('DB_PASSWORD', 'P[I8Uz6B#g7Wgn@sWq~47[*0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ZU5bD0AxMj2Wu6mihrVpzLah11AKd0D1xDb0xGhyq4ZostkXjNnxuMN17qZd5wB6');
define('SECURE_AUTH_KEY',  '3dvn34CfUjJpe2TzmzuHNbeFpKdgcsV0ox7XWejzh9uW93N020aY56g7ztAaKXe4');
define('LOGGED_IN_KEY',    'FXF3srca7EqLf4zGnYM5zD9uuChOO4s1n7FJ83aAyB1hGYSuVUF4VxCLX92PiIGr');
define('NONCE_KEY',        'x5JwzkJpbifbG1hn6t30k2Woa3Hl4dJG93odhYpLVG7AJJBGKuJAhW9jZgSgZBmy');
define('AUTH_SALT',        '9VegI2s8aET7ez5iQSWc6NCcF4KHP3CehzGKp8AxNne6xmDAuVR5pdB70M2jtovQ');
define('SECURE_AUTH_SALT', 'jVRojjgv4obJWHKUzkwOhG1s3ufIitopkS18vAFicahTGTjv82ksnodee7Jd2gI9');
define('LOGGED_IN_SALT',   '4j6usdlBvPIxMzmgYxgxgCboCLjmfpsca1JIzOKIQ3CNmK4ubBWa0iTwqJjqQ2RO');
define('NONCE_SALT',       'L2x48UeIQloilwLGZzH6EufZS6eZPIUo9vSV7go2njdglAkpxiYtyqkzoq4qKZ10');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/blog/';
define('DOMAIN_CURRENT_SITE', 'starcomm.com');
define('PATH_CURRENT_SITE', '/blog/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


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
