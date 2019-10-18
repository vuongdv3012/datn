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
define( 'DB_NAME', 'cdct' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'LB$CxEZ9E/2YXg9C?*e.V2Q6>f%T0(wntmqDnKMjS5^9lrhKs/heq/St[=,o@2+3' );
define( 'SECURE_AUTH_KEY',  'LP 4`1W)YvUI}Yr|-.lKX6~D^y4=F}Wz IQ#>D41)RU)8i.Xy, (:m,P(!BoLg/~' );
define( 'LOGGED_IN_KEY',    'z;BQPC yfw<^j1cPx}FKBoV(UU@0S_)c?^64|xq{^)3Al3fSW}yS/o0(RdOUs9qi' );
define( 'NONCE_KEY',        '&,GH!eCr49DgW}%;V[3Z$!>}/]{#YaF1<kU)HOx@PJ.4~)C37v#`m,Rc, ,m#JJq' );
define( 'AUTH_SALT',        '{!yXN*nBO,khDU@e0vL2kn,>3N.QP:q*`~CQq|VT%NaJSQ{&J.L^Z:i9Kk3OCn7 ' );
define( 'SECURE_AUTH_SALT', 'kH1s9g%v(R?w3tbl7~ Gw%m(4G(85YYKt(CU@g6S*+azoIc-<sPu}s[h0EvilIL#' );
define( 'LOGGED_IN_SALT',   's}vfT(=<;{5}Hnq!]qQ=|~dNT}dTyED5:w*pPVcVkHSoeu+HqEfBY7J(,w0US?sF' );
define( 'NONCE_SALT',       '&qNrXScJl@AqRkGE UG{Es@^cJg=5DY@TsJs*,J8N7A`2P=A,v|=IXsmv~|e :aJ' );

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
