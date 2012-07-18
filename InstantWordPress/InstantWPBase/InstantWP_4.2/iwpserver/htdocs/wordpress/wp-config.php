<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6@lf61Kb9Z 7&o/,dnex,i}X!4O;-HTuky<z!8sW:N viP9OgBa439w7n`n,i2J.');
define('SECURE_AUTH_KEY',  'K{:zy+ebV6xP[i^=,AD}Gp<>iD:<GqcH >#Zz nT(o_|)5uQ<IFl?K-r3?E+)6h`');
define('LOGGED_IN_KEY',    ':W0`M4S)]2y+sR^cH-kD+`>azH(|coD^hd?@aPpa9#5_6>?N,B!u0d_dW@fk>2*L');
define('NONCE_KEY',        'DgwH0G;-fPFz3sXE4&P#_ D:-L~[Yu-#Wr;;U!]BdOlb}(oBs9It.3#f*?{rSfZP');
define('AUTH_SALT',        ')cnxgDm^vee+Y>P[wBfk[hW-9rD`Zs?A7L}?lu;74Ew#P+@NVgyZWSHF1=,29q^>');
define('SECURE_AUTH_SALT', 'w:D[s#D^eO)K!tez/u/vR$dt&x3z[%)!Vnu~p^v}7XX}DYRp&9P8q_a3Xk:*BXV=');
define('LOGGED_IN_SALT',   '9gv>`RT2e3~!T#9PW.iB5)QN73%NAb?Fj.Cr^/GLWAzdq7LeHpb*PIX16J-{11.b');
define('NONCE_SALT',       'fQ:7c{*z/3j00dK/y4Jk!c_T0EL`gEMkp5B!7_UqzD!{IOFN1RtpA0~V1>w86]pq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
