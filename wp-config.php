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
define( 'DB_NAME', 'storepcl' );

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
define( 'AUTH_KEY',         '-XU4}fo.pr6,8>KO;c`r?!h8OJgL)1%_HD0rg/f|2HqTm`< yOpo;c;4!`pK[kFw' );
define( 'SECURE_AUTH_KEY',  'c1TG~,BB),AJ7%g>OBa#yx&hFb7H!)9v$:s1F|v`<6u=T9BghBs{SYuDMuXegAox' );
define( 'LOGGED_IN_KEY',    '}GiNWH!HObL9T&z0,nRWdSp|)@T~`O]dc329_yvJktq?W4(NHfmB/GDdDM&`5%LB' );
define( 'NONCE_KEY',        'bI/7[o=Xh +,!zW`bli#Nj^$uygg,4Yjy:<|]pc{,w<e=4~uyjS{N?>d?,g%7e0$' );
define( 'AUTH_SALT',        '1VtTr>jZuY_e;]yzJ^^..+:?VT;3T7=%ECHf{z,Ts&1ESI]Dm(- IK2uzusvqMR!' );
define( 'SECURE_AUTH_SALT', '2ZgdGYP7oj%m=DgOF`jfF.;M{q/F($5!uy.0nhm@AmY;z%#hIC=dv:5$IF&Mn-[*' );
define( 'LOGGED_IN_SALT',   'CROZ ?xSVkbeT1TI4.3)Pqq?*t7+uC=^6/lr.=o=~=~bHB3|js$iW@:_KSUXCZv7' );
define( 'NONCE_SALT',       ']]~~0VS}P>5d/Cf!tk)v6jUBA=^#a^ _>7[&<7Oe9 iP^eZ|t&9s tIfGVj:nLlw' );

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
