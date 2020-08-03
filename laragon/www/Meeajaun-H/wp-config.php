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
define( 'DB_NAME', 'Meeajaun-H' );

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
define( 'AUTH_KEY',         ':;3Wj&-EE#E,:tjm&80,Hz]K4hU-xzCNqp8J;Onqz%=2%aBiJhvNghNle.Z? H|!' );
define( 'SECURE_AUTH_KEY',  '#IeE~TIwQ]x(gci-3ab27d0&v_or/loGl^{C]m>(6$cxv[-RVIk=G3$~HF{Al@G!' );
define( 'LOGGED_IN_KEY',    '<]G;Vl|1gM4~Bs^i}r4K`=~+F.gHGz[?+$&~/[+T6YXIs$hW-gCfDDV8lwo+pYO+' );
define( 'NONCE_KEY',        '0Ls%1-e9IFZ@qM}.`L0XR.LNLga ;#os{l8{DHN<[F9e>a3{nCa{Ml{6n!a@-$za' );
define( 'AUTH_SALT',        'Y386iO$EkE-NJA2K2et:!mO@qtNkU6]p=G_?CQ*cQej]<=O(G^x3$>x=u;|=AE+S' );
define( 'SECURE_AUTH_SALT', '(EC>5[DlPeuS@|/S,z^wQy3*q=E>@&!o9YHSPO44W1s6P{r@WLub$stQKpP^080o' );
define( 'LOGGED_IN_SALT',   'Ym;_)1T~f`k(le:i@a>~%c^!n5eyV Hk|wn2y4w[rB$<FoKF*}IWu:O2y79zX__%' );
define( 'NONCE_SALT',       'H,He56Iagzx./37a4pGQ+B+H12mLhFs}(.Jf-~v^J(rT9SkEEx>s-&t[9TxgO_]Z' );

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
