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
define('AUTH_KEY',         'qbXpWyOpJA0PlpsX41JbTJwGjkmEnf1BHTt4Z6PxhCJDNvkIQ1tFZ6u9xw/IprrhOiFUuX38E9aCnHzWWlu5EQ==');
define('SECURE_AUTH_KEY',  '+SuBIpnNF0AI/1Ki+76MH6I7+CsnI8mAFQ3IKZrN3MX0VYLVt1WqVWgXmBUEko/HX8NDIMSUozx2uphKyn9msg==');
define('LOGGED_IN_KEY',    'nPFI8Q8FevsMHef/6kt7hZW1P08fCHd2H6Qk1fMUWvDdcjWOS298mgVgY9mbdVWwyB0V+iKIc1+EyECW15duWg==');
define('NONCE_KEY',        'yG/wAJXw2vRSwqj6k+DFIuxKcYobiYxAvMQiXh1MPIcPorrktJZ6l9KvaolFaAsbC3r7lTN7UrCa+Y96raje1A==');
define('AUTH_SALT',        'JPdYh5XdqPvOBHqF54On2tNC3ITS7Q5bT/h4ag8tegOczNnz5DtYUC8mtMtJnCCFD+kpyek9pkN1xHagZdDmZQ==');
define('SECURE_AUTH_SALT', '8IJuy/JNADAEoWrL+3deR6BDZAqN6so+RrChr/zd/648zXxY/uknbVjbO6t6hXk5SmPl016FfvyQJraJpVNfBw==');
define('LOGGED_IN_SALT',   'VEHfDH/gVbT8Sctl7m3Mt3bteSdzQ17y8aZxc0Ghibxu79NR0DX0qZgAtgdk/v+DIBFvZVMyuLdkX2rypqxHLw==');
define('NONCE_SALT',       'nia8wNtFxmpfoio2OO45J166AGUv4xq5808EWpVZSIYI3zWmfLb0X2apCdy5DwwPcoK8fSZSteOCurSVbMsUlA==');

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
