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
define( 'AUTH_KEY',          'J3R(:cQpfFh0g<$ [VgzT_>AqGE>z(;&i6g}i#P3T|Y7U(QC}q3/D$h;7c!^&%%3' );
define( 'SECURE_AUTH_KEY',   'y?IW.fC3Op[$E+G_77o7A>G1;6I!k4JtyPRzTO6wplq5f6Fk-]!Mk{Ji0MRU_b8F' );
define( 'LOGGED_IN_KEY',     '5)RZ>=)7Ju{-8K~HwXV+3cW:Qx`a!9%1W|l50p8I~i;T^u6f0tbU`YO!fbic;KlK' );
define( 'NONCE_KEY',         '_H*t)(CI>%[`E-qX*Pvm.rK<EZs7o8%Ogd`5(!w>|~z={ zXT$utUb4@0^<_[gHA' );
define( 'AUTH_SALT',         'Y4f5BS%X=-85wqfQ7J!QQRR_K~!n.$?lzP]+H[b[9w`TTiyBZ( AS~%,kYfUFe5@' );
define( 'SECURE_AUTH_SALT',  '-HZUl=c?D``|@*eYG,xgV:=GCRo33DcgLre-#l$fw.gf3m=ErzXJB]xiP5VU*<(,' );
define( 'LOGGED_IN_SALT',    '{7yI^k4]S7&=T-L1[P!^zW~*r>UM|b7Ut2ZBf*lCl~Qc#tqN3mX|U9[d-fb U)58' );
define( 'NONCE_SALT',        'EIy]nQoeWS+YrmdbV$7(8Q>{z-o54/;=bWIk>w1Qt~H30uvx}^_Av7Kl.R`g kVO' );
define( 'WP_CACHE_KEY_SALT', '[+l.5ZEgC6#W&W$wxS~GPj;}iv)zy>~Hr+7Dd!zN|#O?%: {~bc#n.xj455@V=S$' );


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
