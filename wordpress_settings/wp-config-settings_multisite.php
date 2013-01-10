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
define('DB_NAME', 'wordpress_multi');

/** MySQL database username */
define('DB_USER', 'lrdges');

/** MySQL database password */
define('DB_PASSWORD', 'jCHetyauhjp7p');

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
define('AUTH_KEY',         '>4^2&c8<JQVqLo:d0OQ3WT+E}nyb8syg6|>)$[-2Rfzap)a?(8 JCWrbW@$8*+*b');
define('SECURE_AUTH_KEY',  'kuzmJ}-CpuL~Gty=~pRj@5kPAd-g:Z$p[p<?6629~U)R^?iA^59nU:DR~xg&UC{M');
define('LOGGED_IN_KEY',    '~$O%`v Ztz-Ya~kIN<Zw|TuwYE@RRG:7M*pY%e$4[iDgE8f$OIRt%[hg->w%DDj@');
define('NONCE_KEY',        'C-U_vk3(;J^IB3_3]l+T, Hd?Q7T:t{#@;zo|(D-FLle0Y:MGT}9l|qn;OhzJ-U~');
define('AUTH_SALT',        'A,WN=tl V!0]~q>W!| kg%i}VCWrMxs&T0W-A]K>IA%us!w{VLMjT&3j+qz_+g_l');
define('SECURE_AUTH_SALT', ';H+5n!]t;1;MJD8:Y(*fs*/l2#M50:+@0O{VTO^E6T{zm@WE`BCKYXL,+Ntp+hul');
define('LOGGED_IN_SALT',   'R1}Y5ja504,7iZtn)I6~icF{n>wiUV<9n(/E@@{N9.>vXn~S(]tv1?LwCkGwP_hn');
define('NONCE_SALT',       'a9vpN]YGupMF-%lX$I4+_.W1rvgd3A0Qn@s^$U~(b5&UM(^+Ie,k-fCt!RJ+TX(6');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmulti_';

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/wpmulti/';
//define('DOMAIN_CURRENT_SITE', 'localhost');
define('DOMAIN_CURRENT_SITE', 'jennadich.dyndns.org');
define('PATH_CURRENT_SITE', '/wpmulti/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/**commented out the require_once code BELOW to prevent
*  Fatal error: Call to a member function flush_rules() on a non-object
*--------------------------------------------------*/

/** Sets up WordPress vars and included files. */
//require_once(ABSPATH . 'wp-settings.php');

/**-------------------------------------------------*/