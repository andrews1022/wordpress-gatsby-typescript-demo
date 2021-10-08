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
define('AUTH_KEY',         'O7O/NVLEMfRZp5X+2LBTesSv3dojsZ20gB0efCa++bx7cjEt4rcni2mp9q25A2AbBtp2BdzpwnjoGY3JqsXowA==');
define('SECURE_AUTH_KEY',  'rftv4UKohhnvXWVLH/wC55InqTB8E9vuI20lrnhVeoQxS2Zk21A6glqoa5P9VA60wpLr2W4vftWFmRw38e9hvg==');
define('LOGGED_IN_KEY',    'zawGB9e6M8GJaOXHsVJnwfcpQpamb1TS9bP+vRgwXpGExYHeoln0QL0OBnfQ/6Fpk8H5zfrSryQGvPgyWpKfhQ==');
define('NONCE_KEY',        'mtfxLs8lVMKKn2AfpJlaVEciwa7UVpiwjCz+6ZU8HaN2HsZWMSatfxyKKD535Opz7khHz1FJ2IS/VQGKZQ4xnA==');
define('AUTH_SALT',        '94oZ0OD8nyNMLK3BBgRp8pet5BUYPNXk/f9z42rXSy09KYmSJ2Nv1K1jtykW24jejRQOzpJ3sttWzo/zYH6fXg==');
define('SECURE_AUTH_SALT', 'nbLue4pN3z5+Us/EJRiAqZf/wNI7/T5ibq5r+YuRue9lN9BHJwHg3qyVso3uG340GfBM6PvP+zSCxLBnrs3aFQ==');
define('LOGGED_IN_SALT',   'ihlNnTd+NN42d/qXKp9zePiDy5DcZ0uC36KeLqFqNrZGahm3ldvNWay6IgyHh63e2J6EK9VxlyNW76+3AFCTwg==');
define('NONCE_SALT',       '3A0muwaPAiLd1Ibs6wgPcKBGhtTms8yS1Nx4Rst1VhOcEAYYk86oKKqqN3uY/vJKmr3YC8t9U1ZPSWpyGuxP9Q==');

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
