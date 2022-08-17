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

define( 'DB_NAME', getenv('MYSQL_DATABASE'));
#define( 'DB_NAME', 'MYSQL_DATABASE' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', 'mydb' );

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

define('AUTH_KEY',         '3`-8Mr^bqV9$Mss/dZxRsl^mSVeyog1kcd&{18Lo|>6}2Za]uhHm9X.5#M;u|yX1');
define('SECURE_AUTH_KEY',  ')5L.Ch+dc:50E95EVKA4+|JkbE:c9+Y^e:/`2>:I? )80&D?}v0?#?dTQo$@+;J!');
define('LOGGED_IN_KEY',    'uPxW)LFOr0#!:vQBJw7r4hkqj]b|NFA0e0UuqQ4hG269ksxo2+B;|6IZ9={ 48#-');
define('NONCE_KEY',        '|>-6@U$nYr[GFS4**P-3~oiUx7MgMpRw+8Y-pqC=gY+xXP34#* N|w?1~[F|qY&V');
define('AUTH_SALT',        '{i#bt*LRo(%|T^+ljG*9$q%+_f,PT6yej:qvyF/ufj-$%iZg3GJ2{Yf/.EpM_u2b');
define('SECURE_AUTH_SALT', 'n^0),#))EM,n&:Z=/1%Wr@&b|{S?;8&]+.H9W65k-jP>L7)y_9Q~)T|uyx7JJfov');
define('LOGGED_IN_SALT',   'X%5o#1H}$N/}Br}r9jfsJ#-V-*>jv<M-Z#mml !1k_D+0;xv-[ J>fHkNN)#m5&I');
define('NONCE_SALT',       '7g(4&Kih.-W1|&r[9s/DZTT18B6Z~M=z=y@(gSSbF6N5(bAvhA+)i:O]G|I&QpRc');

/* The WordPress database table prefix. */
$table_prefix = 'wp_';


/*The WP_DEBUG option controls the display of some errors and warnings.*/
define( 'WP_DEBUG', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
