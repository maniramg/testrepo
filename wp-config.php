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
define( 'DB_NAME', 'eyebrows_data' );

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
define( 'AUTH_KEY',         '=IkYA[!pi7saeh*?q8nKDNT`z,y$0[6do;A/zhv&5OAaIj;.a<~A,w[F43Nw6[Tx' );
define( 'SECURE_AUTH_KEY',  'uc9,*AhJ6/F>um)lh,8#ke]CDMcnIv%(ubCcoRX1NFo:Xj@$o(8XiPISC=.I?;f5' );
define( 'LOGGED_IN_KEY',    ';31/`!eeS3e+tmp();~u&,z:SDk(*IrxH%[[@zD)/=B4(~^JQ<`@h>o?^<B7^L~A' );
define( 'NONCE_KEY',        'Lb;DMq8scQvE}ne(g8)L}/626-ENxRe~(FuHnEw{MH1.nn(NK4hin2+(%XL2bgg1' );
define( 'AUTH_SALT',        '0jj#f-UsyBEyNxF33ZR8hWG!^EyD<iW^r9q^AlA90dZ.[,9,<w5-z-<4QPSuzF6_' );
define( 'SECURE_AUTH_SALT', 'De.E(W(9@EUY byaY(`v_t^B][DB{[YP1b8s,?W!nSKx1NzWTHW[P[m4X#@6|Zpa' );
define( 'LOGGED_IN_SALT',   '];,FT<A:IeZ5pbCS?C->9J|NPC1(bKH0F J~y%P:5(PH!M@a:Q#:Nt>V.r< M|,V' );
define( 'NONCE_SALT',       'oTe AB,8NkMxK;_i+Hf.YK6Z+f## W9-S|)}~WG|i25aG[IU3wbv0X~t2[PV7dO5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'man_';

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
