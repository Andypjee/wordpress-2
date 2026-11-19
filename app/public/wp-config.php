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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2a+{_{ol <I=]!XmyK%-wWTamso2J__Mg06[<B*^F[UW Xf;qxtwEBylB/)*0[<0' );
define( 'SECURE_AUTH_KEY',   '.7Yt7)}@7BAfn8wRaZ{|pIU$rV?WYhC+1Xy{_pW%92b#]9e6hbOH#vMBui)PdNDw' );
define( 'LOGGED_IN_KEY',     'gDPzpwx@wS?z=J<7b$me%xmwFzS[<^35,Q2[%WV~`?g<FU5VR.(6=$k.au[>@?eI' );
define( 'NONCE_KEY',         'C=sp=!Wu7E0o4&Ypii?/,C5Xxm,f)8U9b):L`m&`7.T!4P-.ZIL^9NM8Y2s0e^sl' );
define( 'AUTH_SALT',         '/8ZRpIO&5y%@`Y~n8/-PL_y:RI1K)2d&p 4eJ>Y4Q1gnCsR0|u0yx8qBcv7z29;>' );
define( 'SECURE_AUTH_SALT',  'UR$1D+3oaV0R7[Cv?gXqn&k$G{;DN>n;J.] gHnBuIY{u6jWJhRIt+K(7-AuL`m1' );
define( 'LOGGED_IN_SALT',    '=I3>!mzFA$lx=FqQnSQ<N`#{]d+[e?41dO&&Ku5-j(0~Sa_^3lj^@ EyzO&$+p8M' );
define( 'NONCE_SALT',        ';1%Gb.H]V X.T &ycvO;YGw7a{^_Z/T)X<s5Gkl==)hb>pKC-f*l8Sjq~OE5e_$j' );
define( 'WP_CACHE_KEY_SALT', 'M$;hcGI6%wz`d^|,a.EYF,)y,gcMO&:u[ls{yF@5Caoi9LXa$Q|CLxpN<g*7vo3|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
