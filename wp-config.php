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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Cloudlab08@' );

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
define( 'AUTH_KEY',         'Bg6Rgi*fis)2W%f0ozE7`icKI8K_eTn*}T%cY`heZj4V9}YfrqW0PdO?A.h; VcD' );
define( 'SECURE_AUTH_KEY',  '{7LS^.zg{M<Bh9|{*|AQ`L4W>y)FHRP:?P+nZu8GrsNEsq41zvzWgkg1dM.l)V/P' );
define( 'LOGGED_IN_KEY',    ',~ypHo)Q|r:{.em+.-ALU%gtAJNCDSh`=Rh6:M,vYo<i,r1c^.oaK$q%*E2vyu;P' );
define( 'NONCE_KEY',        'wTq-2AAm?L(fbOAIRpSJrpY]l]KH$z_r_h5fG|7?%tXa=<vt^B3{L:@UXRb[*[@i' );
define( 'AUTH_SALT',        'hVlnV9EvKkn&tSsLw( 7l*d#ozG6.Rv$+B.>y*9$q_2ji}y<zS`96LrgNfPO|=BA' );
define( 'SECURE_AUTH_SALT', '0h};{RpJbi](k]T_<Cp8Pv[5LXu,Dj_f[J)8LT>6kRDey7D3DO_0B>XI|/-`Rd:+' );
define( 'LOGGED_IN_SALT',   'U&V*A[gS&m*,V5c(Irl2MozDsyMF[nM&^hjI6lwi|2nb{>Q?$;Ps^2D;e,a~y}%I' );
define( 'NONCE_SALT',       '2qJYPh45]?QT 0auf^P]^Wy,?q zWmDSJl+@bY8D$8^AFEk_|ox`9qP}EAgADf%.' );


define( 'WP_HOME', 'http://16.16.115.80' );
define( 'WP_SITEURL', 'http://16.16.115.80' );
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
