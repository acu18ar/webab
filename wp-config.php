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
define( 'DB_NAME', 'webab_db1' );

/** MySQL database username */
define( 'DB_USER', 'webdbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Webabdb2l%' );

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
define( 'AUTH_KEY',         'lCQZtdr=M^J,sW(5a4F[Hb-vIOh,|vj0Ia+mUknRXd^@bw8NblJ04=}6994?t2_N' );
define( 'SECURE_AUTH_KEY',  'w@ XRhWi>qd~!x[Ng^?on?}=u}%=;l[bk74si)E6W(r#BlH{WR`8TDtA}T9c($hs' );
define( 'LOGGED_IN_KEY',    '~udR^zXvNsA]J<&{M%2({x|uq&+AS1.&j,X/=17FizIIh_l?u.C~H75:)?,Q1O/P' );
define( 'NONCE_KEY',        'f(}7Oq:+&k3TG,zmF`pvJ!s70Chrn[U}S~BL{mG$0.,n4j[M$U@,4:s*Ni8:aG<E' );
define( 'AUTH_SALT',        'lp=);wY j&&XwJP0-lat(%Z(_*YTHgXX}6GF!U7an}gR<V+mG3,umiI#gQiKyS7p' );
define( 'SECURE_AUTH_SALT', '7fe_? Us|C_WCpC{Li`ZA#Xqbsc#rsUC@exQHvvKMZNEDV}I|j&|0a0m}W!}NeBs' );
define( 'LOGGED_IN_SALT',   ')}V>nQ**^UPryXwS~vtJ+].=0^xH5vKeO@L,t$:b8gChNGh3F+zNx_/RFg21e22?' );
define( 'NONCE_SALT',       'qHVgw9:*z2EF?R.p!=6!sjMGb]fM)b0xU!ha%;l]jz?iw4MT,j!T!Pv68P<:*_ED' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_MEMORY_LIMIT','128M');
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
