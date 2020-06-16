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
define( 'DB_NAME', 'newhope' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'T7jbJID=Za=[-j51C$U7i826m>3$0.;i0l hH=E=XouYm#qaeMDESG_dZ}]XU1`F' );
define( 'SECURE_AUTH_KEY',  'cD:?WJ5XC$W/dsWh4VM1%2s@=n(~&g`2zr-z!7mLE=$G13BDmcsz_F5^(}8WE*6h' );
define( 'LOGGED_IN_KEY',    ':y=L{AHc8+_XOTSo@#7EUP_:vl=90wQa6|8QkDXHpIq&3P~)Xga-KeIqw)x14ZuE' );
define( 'NONCE_KEY',        'sug/@<#UcJRm!ybBxmau#:F4xG8#8(Q(obT&(1>:+8%OjN4xxzTyE|nLZ)QeN,Ue' );
define( 'AUTH_SALT',        'B19.6`9p*d%[e_[nn}#^fn%B57A:&TZ00V6AbeB]i/&fB1=UT68jw=$%sH+VRF)~' );
define( 'SECURE_AUTH_SALT', '7Y2]v4J$}x%n3*kA`@1ig78:R?|6NNM4id<0i81pj>:hf%`P&9q<]$!:BT^F =2.' );
define( 'LOGGED_IN_SALT',   'fCM?<?}c+iFp5^*q2;IUXMw9B;3V,; dC$YlA2`*VQmE^,{m[7cEaLwEI+iisr#3' );
define( 'NONCE_SALT',       'O=HrdBLKL|QjF*iSp2d#sqQtJHtZ`XmjJowyCOtu5qSfBK3l0*J8_$/! xGpUj[t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
