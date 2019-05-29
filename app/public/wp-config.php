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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'dE+jl4Kusca8T+iItep9MMaNTLYFJIGneI4OALXp99JAM++U4yBaJF9LT3VmQw+KH43PJja/dAY/VDZlBRL4VA==');
define('SECURE_AUTH_KEY',  'kES4bnYSbwZD+e2s7eaxvTnipGLzLDtXqif3x4vgfO268q8OL4ROByTe3fZJNFaoXmRvcvRGF8f4K6eNp8XmNg==');
define('LOGGED_IN_KEY',    'UCseSCFc3y4EKb9dAjUMCseBSr7Af+7iY33TjKBWHGqqN9kOCJMiz8uiaGHTzKhduU0dbdN7MW3MOAdnbZ2LSQ==');
define('NONCE_KEY',        'VOKMCQF9VTJAMe8xp8MYiE3uWpo8tb7otuhemQ7nlHpytcx+BB0V/ZEq3GDJVcAHJ6qrtfntrEkrVoMqfagq2g==');
define('AUTH_SALT',        'IBc1Rz+IH4Oj8qKatyNgkDB+ghmejTRviPpgetPYtT1roVoQczzYDY43ou7Pj0v4SwZ8nf76YpoYZRyNfIAEyg==');
define('SECURE_AUTH_SALT', 'YZSycDP2n6URM8XBEuWXcmDLNgXsHcZ3bctHuO9MxDMYQC9Pchi3Q4bnczcqPrssRcuI9V+q2Q7Z6Fj7buXsIA==');
define('LOGGED_IN_SALT',   'GFCTCTbC/cxjYyhKNXe0/n3QISKWDXpkno3UEAwQGicdREkfI3ePX1J4jL2CV4rbvkjCLZXu1haI3yGpO5g5+Q==');
define('NONCE_SALT',       'DtRJC8rVb8dt6/01PRYalnkp82Gj1nQBTSZik3Vjl/e/RDajCvFpVFg/pAGeoJIMpRWesAFK2SBLkb0Apb0rpA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
