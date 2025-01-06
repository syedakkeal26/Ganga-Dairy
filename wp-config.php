<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ganga_dairy_products' );

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
define( 'AUTH_KEY',         'd53<QRs]L5d|fY9uT2MYaPuxPgsm<cs[~!O-r^%%/u`V6ouyF}DDQhu]FiYnn>G ' );
define( 'SECURE_AUTH_KEY',  '(Gze@$kBRu(W.eW>2CY|-/kd ETFvc*xyfUf7,0x]Rix1tWTS;cw@/NFxC[JxB~=' );
define( 'LOGGED_IN_KEY',    'I3 !:[yG~c*LeO>&>u?ZPa7}XzqElHU4E~}GkW wB`2bfPtAg3Bu[$x.[#nys.jT' );
define( 'NONCE_KEY',        '6JO=nuF>VTu5gP~o,Fs2$adDDd+Bm`&BO1@z+j+lWW{U0LH4a22DAuYq:K;nPr^2' );
define( 'AUTH_SALT',        'HnW?2y=PikQeLQs?+$w]~}eZ.yadm]4{o<*2vLDt}L~,OHUD~E-0dAW[dS$=+}La' );
define( 'SECURE_AUTH_SALT', '*/obdND@#ErE=pnW#D.|}mdC-qC}tDEi}erV{~rKqjV_2|cJ*8=3>n0F)#^e;drt' );
define( 'LOGGED_IN_SALT',   ';r56+-q*lx[4j!V/]HcW2og93]z[%siv%tgk46xh3y!IjWh{t{7iPIXw<;.&cVg(' );
define( 'NONCE_SALT',       'bOA,+5}%8>2`}JZ0:z}xjlSf(3B~sAiJ=OC*v?jN.w=PiR<+I(4ln*3&@~);(p$u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
