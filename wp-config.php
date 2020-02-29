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
define( 'DB_NAME', 'udaan' );

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
define( 'AUTH_KEY',         '->{^O+n1p--NDgS(A6m;rR7/zBtz^?:`%LV=6DIfuW-`[k@2?<CcU{Dk8`^ 6H8U' );
define( 'SECURE_AUTH_KEY',  'TB,t#C{]e`HUZ[fqrYFQ2zOE?zP7LPJdx%~KXyK|}hha0/?Pa>%#xIt:4xfcVuFY' );
define( 'LOGGED_IN_KEY',    'RN@chALyo7GQuP*T>u*UZK)zsuRnM$9*Wl,K3ij0:MD5_#dXZW J`Ym56St ~hSM' );
define( 'NONCE_KEY',        '6BG!.1J?FI||$yMF4fg<)F*X)%n .wFjZO:s=drnt+S|j_EnF/]toL1a}yF{j;Ac' );
define( 'AUTH_SALT',        '-2~d~Lf+1#{q;(i_,edfxC1Wkef,1#n~)D4Mn+s0*|(=qo)LMEXzg}Bu%k)z}!Qi' );
define( 'SECURE_AUTH_SALT', '`Y}MsD%[;PUatd/ZhO|^JwAxE&p,7OL6-fj&`L@$89f*hQay|>N)b30$xi$f%F<`' );
define( 'LOGGED_IN_SALT',   'b;vuU3I3}vLiRz[bF Q+BCyj=C6VQ+0(WEAW;/2w6Gf%:T.CT.0T6snJG}sVM~NB' );
define( 'NONCE_SALT',       'oq)QOFVx:*$puA.qBlx%WakzjSv|9)?/Al#au74b/eM<A(pX4arh`][qFUzH~pq.' );

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
