<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cgZM.p_=W{H%Ak~hy!{K34iW|qkU5thD:h e$?y(<`ga}dc1_z+momy!EPdS^S^J' );
define( 'SECURE_AUTH_KEY',  'eMAS{K,+J%DhpY{@oyT8J&B6qsn&@>U+GQ.pW@BK|B+uhLA*}Ms}}i/KEBoRV?n)' );
define( 'LOGGED_IN_KEY',    'GG18geM%[KO4( #;>ELJs>FA~qMjD?q5c+-APtHQAfDGhTfFxir,30HN:<ecV6$s' );
define( 'NONCE_KEY',        ',cF(oof,62HmtWEU={4@}EP=<%<+nj5$$:0SFsd;=97J>X,C]TAE#,.|bJVVBj6t' );
define( 'AUTH_SALT',        'eyU!CX>EzsWQZ&Q(f~MRXP5+3s`K[pUaUTw*b#Q-{KHsn./-SaD0(R1</YVoYhgh' );
define( 'SECURE_AUTH_SALT', '_900up,K_SSgnx~RCu:0_<${a7w#x),Z,/ia<XoMJ/tUDP| nj%o*-v}[w _9)J_' );
define( 'LOGGED_IN_SALT',   '#|zp%!tla]2z4bS!hI-YD6>rG9h0YTwRSiQIQgZV{zj!5]#{!YTh:8y`*MF&4U.&' );
define( 'NONCE_SALT',       'ad>exP>*`J<F]Bb<fob>#qXF9%c-E:)-Z->G5`pR>jkeA!^Gel%9uch6eoA[(D6P' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
