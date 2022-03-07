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
define( 'DB_NAME', 'opakowania_www' );

/** MySQL database username */
define( 'DB_USER', 'peszko' );

/** MySQL database password */
define( 'DB_PASSWORD', 'peszko' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '=!P8<J;:D8=>YZIZ]5{~b<<tlw/e,FY0xi&=FiS5Md{)>n_^&GP/8M*`YZmBdvCd');
define('SECURE_AUTH_KEY',  '`ZUiK2_%.hltk(3M#>@m}wX!XMtk+w)^sHuBdU0c-|?I:Z@,Hu=$|0G@IGDBE5b1');
define('LOGGED_IN_KEY',    'Ah(_uk[xpr=eB_-H|cic#e3uHF(!+PK+]7<x/2Q:ar!Q&e@1+B=]h7OkV,kSZN,r');
define('NONCE_KEY',        '`2+b|-J3I-K:uA4-Oh]8nQ 2EP9Pco2b{N?67@c[-|RuK M?`0F-hwp%j,zL!RlE');
define('AUTH_SALT',        'L]P ~-2>sUNj rR{c]H|;B-9CL>+stSdJTck#Y4rsM):^40I.K;;s]){&Ac@IZ}.');
define('SECURE_AUTH_SALT', '1-|E=^!KK~fR,|a,3Ndfi_uGzuX`K0&TN53`A4Cx;(uY5/idHguuAKDnOW-7(c#z');
define('LOGGED_IN_SALT',   'PzaII30EIF[{8)Aycd1EfrbOE]WP14pi~F[4Hg+>>5[v/-Oh!Mr$Ho^06a(1(#!*');
define('NONCE_SALT',       ',^bWk|<FcvjBTs^ O2okpOurdKZXeP0xKT|.08e9lC`F4akiIx?_9y1FDFJo426J');

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
