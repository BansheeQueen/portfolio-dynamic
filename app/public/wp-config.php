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
define('AUTH_KEY',         'ELSILcp13KNT6HXalt4nUlSzA3AG+rZ0308msDwZlh0YoTSEesW1GX6EcuW7sE/Z4mg5AgNMlkqxJsz5uyBC+Q==');
define('SECURE_AUTH_KEY',  '9XmvP0kXcU6cLXsFJqKvRj0Tpzpf3iYY2r98O6q0C+Qjxej3UiZEBaHsw3FaaQD/hz3QXlCRAFI8P4de9rT4zg==');
define('LOGGED_IN_KEY',    'xhYNEjYG7Hg+Qv9exKedboAFaG/F5g2z223yBzii0DS0SBaVOs/KACifbGJeEPxfoM8mcCkJHwdGAuN/1W1Kww==');
define('NONCE_KEY',        'L3SIZRH+CM/jolApDsbIzBjHP83dsNalRVgqiDsjJIIycKw/mPUjkYdGwrWA7JVQJBH/5kW88F6AvgT/mU/B8A==');
define('AUTH_SALT',        'v5cbzHt7fc0xhh4u1Uf6dZyciJsE5QzL8En83eh9627rTbWIFAGXQ1+mr7ZKMibYHaSxsDSGJlSvTi6FRxKVnw==');
define('SECURE_AUTH_SALT', 'VnYfWYfwzU+HKAdcOMyNXBCAWRYpV3R19ERDl/dnFYl3+gWc+IHMBk/0AyPon1kbcggRxLAVImoXndWj2MD9Ow==');
define('LOGGED_IN_SALT',   'nGzlEQJLvVGvJpjF0FOr3oPP9g+JW96CBpupUmwkfftPJCvAmGFmfK2WWesCfgEgWXd4siftIe515Ew/heLnmA==');
define('NONCE_SALT',       '1xHoayXHZvLfx2NOiGZ0bKEoF8DeElxJbSd6+gCh5V53DoMgcgObfJURmjnICMqgbzpjajKxXxncbA4sAy4vHA==');

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
