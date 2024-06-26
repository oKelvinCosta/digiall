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
define( 'DB_NAME', 'digiall' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '.%yjd$~J-?aw}$!vwA>!-]H?X8Z ,;{gB9do;-=5N{c*:Y_4.zF8S$Iq|QyUSFx|');
define('SECURE_AUTH_KEY',  'Wf00)LXKMmE+=`*|^}Del%Po&.z7Hv[a:fIEO0qOY:eC1[;sNU^l;nx:tq.%oShg');
define('LOGGED_IN_KEY',    'kM2onpOa_22F9>@}S +<2lr?X_!~+zQk9hbKi1yu5MB/k^U`]R+RY567Z<,lo8}*');
define('NONCE_KEY',        '?67{uGY@wHX(&:rSm63Lx@CoQ_Y}>h=Z}qO{QsUqZk39_+-Xzv{}xj$wKk?lnYqU');
define('AUTH_SALT',        'UCS+u^`&MyK@c)a%~cxl~Xy=|-IY(ERz2JsE=q8(|v0,CPq6Mza75Vv@#_e3ri@+');
define('SECURE_AUTH_SALT', 'TV2]0[X-T^iwJc<kg2X)Txw.E@fYpsP/DyRJ&o|l?cn1$](8g?FBXn?02W.LY%H^');
define('LOGGED_IN_SALT',   'n7+ajNx)~YuOr@vwzS&G(l2RUl~Ibn`L.rISBt5jw&s]5|PD{AiJZB9YEEyZr=P.');
define('NONCE_SALT',       'b%1Nu4> R6-G`nStlQ94p=b!e mwJ&WL:N%J#e3,t5=o|-dP(J-`NXTXc3d}{)g8');


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
