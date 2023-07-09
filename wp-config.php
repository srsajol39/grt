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
define( 'DB_NAME', 'movies' );

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
define( 'AUTH_KEY',         'Y6~8=_:MJS?6p m{%y*+m-h{(EnUA+la~=;,$LoplOs*`_aFBbjQ`L#JHBRYE=ad' );
define( 'SECURE_AUTH_KEY',  'rKut)X.#,?0SG8$[5N%Z8Bwjl%MOx{*dEQF1l[:N<Q[V-C1t(m<V!-DNPC#,$p[1' );
define( 'LOGGED_IN_KEY',    '1$HSVKC_bp$P?8f[9c#8!HVkzc8`GL_bEIdH ^hoS8^t~ng-G5KhXt@*BpGp3GSE' );
define( 'NONCE_KEY',        'vo3=3,-2rGct`Lfm64K?oXXmS$e{uJ_pS@eL),lhCx#`B5{$n(V4hyP0c2&e#% N' );
define( 'AUTH_SALT',        'aL=(E!NtbnrW~aowo4z@XVNP28u<&:gpwNZfos65BuLlp1wZM2g98_./Df%a$:;l' );
define( 'SECURE_AUTH_SALT', '@EBe(~;^A_:s}Gfa*LthppD8LtS1&8>t+#zjaufQm+,~HR)>Ld{ ^+dA/i/MDzr@' );
define( 'LOGGED_IN_SALT',   '0uYPV~=LQ&$k;L_qQsx<$ifypSM):HzXHRIC|t}nndkQ8:(,6E,b0os+OKq)(J=A' );
define( 'NONCE_SALT',       'P7?RU*` /n1`S42{HP.9P[ME<>e,=V*NT`nVg%cc(tK}j_1Jy~av@+HCNF55HQq2' );

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
