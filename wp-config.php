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
define( 'DB_NAME', 'ESW-site' );

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
define( 'AUTH_KEY',         'Y/0qx5X(uT`<pt-([=#sJh~(% _+P]_LsPnJm1r%3CPo%We5`z4R$>(~Bh3b2|}l' );
define( 'SECURE_AUTH_KEY',  ',jT~PuPErx^<R=V.3B/+`mrOO~7e0}g}daiE1*csj<Zn_(keOC;97Pu*E348Sn.E' );
define( 'LOGGED_IN_KEY',    'lLu+R[#ASE>>0K7K $Eevrr5;1<w+AjdB [d3e/FSaaM)U?QN3ma]xDZ1xw!AxvL' );
define( 'NONCE_KEY',        'TYNyx/o[QF1fVJog;vWD8%AeQ~16p@u6*qUl9:U;N-Cl$=Ki)9F/S@@#x`-Pw =X' );
define( 'AUTH_SALT',        '6<Hg)k)GWWSH7{ }oVo.I-;3<I`nuI2Ya-]3ji0a&(Re*I#(^:uzFO0QkHp<d}Eq' );
define( 'SECURE_AUTH_SALT', 'T;93hP2*|^]Qn>WL4eM(@6_i,vskO%KJ;Kr@o-yQ0Ef^F9{e6Kdq/Q>`CF1-# +Y' );
define( 'LOGGED_IN_SALT',   'N=-`rF77[liV?>y`ula1Tp`zS(/+FcQSb<Js2f/CaviU.|v?~cT0YwW9|R2K->RJ' );
define( 'NONCE_SALT',       'G%)QeVh:L>g2y.M-vdUuR]Pb/),D_}*8_iygN6#>.6L/)E*5eEp`l]@w&yWR+tR^' );

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
