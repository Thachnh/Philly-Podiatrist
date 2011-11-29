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
define('DB_USER', 'admin-16721');

/** MySQL database password */
define('DB_PASSWORD', 'philly!@qw');

/** MySQL hostname */
define('DB_HOST', 'db01-share');

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
define('AUTH_KEY',         'ot`)Zv.9q >[/1H:aP?vXz6L3b3Qtlu(kHvfoSt0L<?%VKm9,G{}~p3^kky[5FL7');
define('SECURE_AUTH_KEY',  'F$Ln7e/t=+BUpU&x9Lt:;2}fR,vPe.l|Brkf#ILg<B;Gl80G@<vOy;[yFeFy4(^8');
define('LOGGED_IN_KEY',    'Yqsq6XF(`O?:RWh/l>H@{MD=i.*s[,rJT^Zv:Vh@[=i0){55|6|7 |jGrPV[yH{5');
define('NONCE_KEY',        '>8L(2CCB|NZ3%27$8s^;k!W-j-(8@5t_!.>MN-T*IRJ;3UR4@wjvkE$NnvcP*f<c');
define('AUTH_SALT',        'IQM<|V|J7%otAOJ9_56^w*EU;hMRots()auXC#vB)JHGB9by)wXZ!5X1XH&B+9;j');
define('SECURE_AUTH_SALT', 'A{2?cvUUQFgHl7b;m*rO2Zt[p@MMG*0[*}Xm<!cvarPN&Ui2%[<Dy:w&Q_W_Nc@p');
define('LOGGED_IN_SALT',   'BT,eMAdk}>bM_$L}m#ox9|bOyFydx[n1dSQZ*V[WvB70G[N[qniq)#l{1Gwj9Fck');
define('NONCE_SALT',       '1R{<l~)!u|02y,eO_yQmXeo/0VQFO%U(j*$Ufv#y?49c8{Z$hb<2<EEucnNfZiO%');

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

