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
define( 'DB_NAME', 'tiennguyen' );

/** MySQL database username */
define( 'DB_USER', 'tiennguyen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tien@123' );

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
define( 'AUTH_KEY',         '0 4cW<!04Xu11YY^kEQ]e5!B~Pt#SffFeGKX7:wfJv!Fi?:9!uqI2:{B4i/[dR:I' );
define( 'SECURE_AUTH_KEY',  '.Y)R%VB@t[;W[ZJeiGU*23`?4Sp@Z4-)(xkNQ%xC{<c)PF9:!XoiKX[q:w$t?dVr' );
define( 'LOGGED_IN_KEY',    'Bk@7E~G b)wIxBll/G]vVID*DS+~rr}M``Li%qRx?=1%@B~`fzE`-*&r$evQLUG8' );
define( 'NONCE_KEY',        '!Mz|vR-Jj?N?:/%-DG8DqvGOB<Cp7SzGD~{ZVlU-lVIktc<)d(^`?yhB$rHlZZD%' );
define( 'AUTH_SALT',        '>[,hb{m9OOgZuQ7Zwp3H?ov8cR6GQ1iyc#n,#(M2Dv4B[eT[.(1EBL/:Qe^ybl[4' );
define( 'SECURE_AUTH_SALT', '35<6/UN@ve8znzRN~W-{bXy {u9oBA?FEC}@ %a5<GNn;1-S|jE7T?W*88P?is}T' );
define( 'LOGGED_IN_SALT',   'e2->ZCQ/}W^]^4}uh6&8za;VrTI$1SK1`Sot4QZXZ^T@4xRe:hy4X,=T;fDU4h] ' );
define( 'NONCE_SALT',       'AaI*UQ)vdm,N%}b&s<e<&9)34bAmD}vds*w9VVZL}lQu=U-32F9|D1Y(NQ|EDk!d' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
