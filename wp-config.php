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
define( 'DB_NAME', 'redifa islam_db' );

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
define( 'AUTH_KEY',         'FM6OVWGd/Ji|LO9D43X_+YnC2t-SL4U(CUiXiee_9{z_R@Y*9d.d$%|(+&G$X zY' );
define( 'SECURE_AUTH_KEY',  '-u6vF=G<Vmr*_)Sg`w0Ri3t? D1|/1+n|:J!Mn}:EyjYxvxZ,a5I},7A!?R!qy}-' );
define( 'LOGGED_IN_KEY',    'w#Yy3r. f1(QqT`}D{9f|zv,VW5VO4I ufH}ZR#?NJ>Kz`d+n7-xB6g^6p=[MW2E' );
define( 'NONCE_KEY',        'UUoc[j`qMimd`z}.jhQ`j^_g-<_[DIg7cS)g2@Tc>m%qOOXWX-qU9kxgwCb)s7A}' );
define( 'AUTH_SALT',        'aipLq,E`zHvn(`ybqAW9*UIXF7Uq,b4{9s/qZ-|c0|)Zo}+76EIhrgo/*Xv}^Q|,' );
define( 'SECURE_AUTH_SALT', ',=Q6}CNwo:4YGDEupJ-uv;O@z9{RN4r>7KtH2`k+lTSw-5Gi![_/V@[>J@S{;8-w' );
define( 'LOGGED_IN_SALT',   'a:9W-O:&0s_F}r[&+?^AtXELD;}?+-aV`I=T^)ISof6UJS;C<v_VBk=g;14yKECE' );
define( 'NONCE_SALT',       'J+dUs$P{w>!15%c&e/jNXL0s,2H#;U]`w@eZfcTc%vZBN1Uup![X2k:`5Oh8m_{e' );

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
