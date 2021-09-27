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
define('AUTH_KEY',         'a/gGonkTxbNTc4yYZz6CE+57Bz+jr9wU4DZbMG76/HGODBoo4tBRz2dOiY6pF3Ht8H9UTvQs2xrrsHGJepprBA==');
define('SECURE_AUTH_KEY',  '5mQfnvha9DBY9C6bYKxQJ+35SlqZXIwfqAwBPrD8bHXhzT8QlU8Dv+rqltAfUMWqBSCUcJdhJg1n9ovTt2U5cQ==');
define('LOGGED_IN_KEY',    'IDVQh3WkLQUhBiAf2qrGOzFNhs2RG5uJIEKX+ANNP3IkCVxBC/YOuQ+NAt7t6FwdrXMEbdqJL6gdJItg2xmOzA==');
define('NONCE_KEY',        'a3ugDQSJdBgrUZ3JiIen+VZNHyri0gLfrj0nuszFOu/lXYpXRvmxVI8OJFkx5LDtR4DphCI8ybSHcDkp3ius7A==');
define('AUTH_SALT',        'vot6UTWY5L/FHeiw1S0Ea8oMO/yn/ndakp6kVvl1sBPzL0QggHYuLNa2dEa4jlDRRSLaUJc9boN+9jVx5oDzVQ==');
define('SECURE_AUTH_SALT', 'IpIPFrtwy6bz9J13kL3Tk61o7eyewCb3BX/IIVvxghVWHF76Oo8uucjx44OikOgS/tlPX4h2BumgoECT+N97Sg==');
define('LOGGED_IN_SALT',   'z5uDa7lOHbESQh/UdqwyCK+UxhmRBCkJp6u7oxxaV4ywEZgeKSoLS/EfsFJrx+J7co7YDsZ322yGvuwYaDVCHw==');
define('NONCE_SALT',       'i4WbbHaQziUmrXGHDZwXiL0UilCfrSU0YeF9EaG/98u7Utj/Oc4wU6SBOANDSqXH/1QHLsI5H4hhqOLsv64U1Q==');

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
