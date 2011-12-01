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
define('DB_NAME', 'phillypodiatrist-phpfogapp-com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'p');

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
define('AUTH_KEY',         'Ul+]||mAPGJ2CtYqy[ojAvJs;DE3DKwoA9Q62lm&)%-8qx3ju._NkL|JG@otYO-C');
define('SECURE_AUTH_KEY',  'DnJO7V5ZbyrC^ux8{h,X~(!dJOQT1V-tn(F%Uden;w/_gWvu]87hnp.7#Xr;%FPV');
define('LOGGED_IN_KEY',    '(z5(DNJbX#kk$Gr%_1+K|G2n KG~~#]^4Vn0{GS,&nZKJjOsj-B2-*tl>PQ+=j4L');
define('NONCE_KEY',        'kSnt]v_&-7[vzj(^i|nC5C-JP3I/;[AS!H^2/Q?4!zp3E8my+/&]ar(xXu_3DR+;');
define('AUTH_SALT',        'Fh]eB:/Q[B[S=f,xR$x<#B<+qM#&J^I.Ps7as -xkX|r1=:jjTwgal:2K_P=`$so');
define('SECURE_AUTH_SALT', '`1u([8(:6fR`E|yC7n|q]FjPAW~HztazDsh^|-@B{(X5)(pW26|&FI9+2q+~gWhI');
define('LOGGED_IN_SALT',   'BB%;usFM%PUIf+xT$BHqzhb?zq[IfVYJ|c+GN=y{Yq$oA,K@P@|hqc7^vrXvAm`x');
define('NONCE_SALT',       'eX?PZ[=Tl]2(}b|`n-#V8Cp>K/};oWBN-xfYxg9.GY5a1}9?:Bp+%vv6BS[|oN>l');

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

