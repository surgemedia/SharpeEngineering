<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/shengs4/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_HOME','http://www.sharpeengineering.com.au/');
define('WP_SITEURL','http://www.sharpeengineering.com.au/');
define('WP_MEMORY_LIMIT', '64M');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shengs4_db1');

/** MySQL database username */
define('DB_USER', 'shengs4_usr1');

/** MySQL database password */
define('DB_PASSWORD', '22uH1TaqmVAc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// SES Setup
define('WP_SES_HIDE_VERIFIED',true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@`I?[`,0nyv/A]!n@Q3R_H+-#kbP:!z.2+-n%{:BPA+_1, .8x!3LjK;^zC7AV:)');
define('SECURE_AUTH_KEY',  'z@lsLpcaQ5hLchxO00hh8a+];|kkytM;y*!AQ|zRp:6,8kM)R$#E?#i` Ad*)icI');
define('LOGGED_IN_KEY',    'Q`lqBjDlE5dNay+@U8P>Q]<|RIh>LcH`^|!u7=q*Ox)+|Z]Oyq$LYgcBR(qJc6g;');
define('NONCE_KEY',        '8/P,G.M;AziF|*$.-Jx&Qd{%3A;U^_jg5IR64}<<,P#a+4-$E,9;j6GoZ){i>:TP');
define('AUTH_SALT',        'f%~EC5-.!cQr&Y97n6+PEm+(.,V+zs:&b@H3z-<TE`]#e2vO?*%hn{H~NsjN)q|f');
define('SECURE_AUTH_SALT', 'e6,vZJi*5+>B^j~)_ VW<JpMSevuN|t.ti2)yH{>0 7ra2Wx*-%L:/#@-a2vh`4X');
define('LOGGED_IN_SALT',   'kC1[Lx+! 3}N-8<!UygzRNr,4?&vdd:/`3J-r:N`<<9>@m:TQbJIHz::])k+`r-6');
define('NONCE_SALT',       '7<bE@[_%RgX+RiP=lCzUH+8gkzz*2BRB]TVPe1pE#0<_N(}uJgqJbq|$ds+hJ)W`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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