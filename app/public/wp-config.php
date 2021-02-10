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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rAzEk0s+c+EAXRmZ51gffSMs9NxvfffFOWEwOVLtSYQyeSbU0bb+/iYAsSmlCROk1+8H4ta2fkvMvLGpW1gu2A==');
define('SECURE_AUTH_KEY',  'HMGXVxktGl0pAG4Y8+uST8XY19lK8f/lfyuKeS7pbFnvnZ63+H2QejVbGMKbma/UscoUmlHQBeaTaSuhvSfG5g==');
define('LOGGED_IN_KEY',    'gSgpbRT02PiQdbSr1tkrv+6//4ncVKWdT2noiLyxOOymh+2l6IJUr4GAOcw8P+iw3iIlbZWT41ic5LaUOc0AqA==');
define('NONCE_KEY',        'PEUybL31SExKRW0fJuNMjiHA9UPGgg6AVMcPnXt3jFItvilw0+GuzGfMuxju8ts2zVU0aRc/c+ScmR9vfkq5Gw==');
define('AUTH_SALT',        'l8WMsJJEBj16HaalBqn7iZZXC1XskvvvdEGMvKk6YJx0vmFnVT6JMZoS9UInO0DyvhrwLq1mlbHut5YHdXbs4A==');
define('SECURE_AUTH_SALT', 'GUMA0CTbK+4dWkXCWikBoDYT+rfU4cEyOcxAIQn/GOY6/PEtOLz/0107qwwRzYS4xQQ+VvpwqAP9LuUIREXT3w==');
define('LOGGED_IN_SALT',   'ja+m3hx4pWtufhVHOOmTt8dRLwisigAZf0FPg4bbJXQIgXwLnKssdYWHQgdq+7miPF0xO3K9OYFG9Pqaq9Vhkw==');
define('NONCE_SALT',       'xnFHUZXeHGawCajhctIfkmC0X+HgDE+m5IAsO+W8NVgCucVVn7xTV91OOmgp/JoHnhFsiyDjnp+7+Z2UDCeHFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
