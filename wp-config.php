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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vagrant' );

/** MySQL database username */
define( 'DB_USER', 'vagrant' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vagrant' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N_cjwg[FrS4xGlO3R+7J#R[ex!rP>:w]N0&/|ivC/s ;W}+;!&CK_g6ZQ5gd-8;w');
define('SECURE_AUTH_KEY',  'xR0ycdz(|m]cJ=d|rCL8K1x;I&dk/?LWrIr[;EQ1-&I%-?9Z~B<*vQv/V]QuxGDH');
define('LOGGED_IN_KEY',    'B<aY-H,kEuNSg{^8Cwk]oEkZvf;@+(d+m[^!uR]pC3)(cwoT*R%mP;zt3(j8xsar');
define('NONCE_KEY',        'SAr9-(2*d0Z#gMrq_(pa?5ajd0ZfxC@ CdjF]?w_wyjp/%]D|^=+|S{M9{#T| ]{');
define('AUTH_SALT',        '$kvTbZruF.*jtregp[5r}|2{o3+:Jb5$;?.45BQ^*cD1^ )b?S#K+o12wO|g|_Nc');
define('SECURE_AUTH_SALT', '7AkikgkvNy7P=3kp#D/(+{0S0Eqtag{GqGut]{w?ilVN&b}g4h {acll8nMP%V;t');
define('LOGGED_IN_SALT',   'Py56qJ5<l>FRWZl(TkJ|L|-qlb$Fp~Q+Zm/|V6T/Rp~J5}zqX:]BHq~.K]+Y^<|,');
define('NONCE_SALT',       '> 8e{[<rdz|~d 8k7TnM]V>wX%W?e)wc50>kaBgl@[c<6|M-r3M1SR[M,%U+H;,#');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
