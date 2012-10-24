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
define('DB_NAME', 'wordpress_weest');

/** MySQL database username */
define('DB_USER', 'wpnkjhiu');

/** MySQL database password */
define('DB_PASSWORD', 'Qweer78Mjhgbf');

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
define('AUTH_KEY',         'y7[/!^xQe[5gUeS]>}Zm&CCyqzS&XzbwXW<0o9mF_5Vq1.$C~X>j-cx13by+!nPw');
define('SECURE_AUTH_KEY',  ';tFlT.>OF>sgk+-0xDQc|@Vgf|-{e<]Nb$mVT&PQohuUMSU&?0Ye?WQ@B_Vv.!X ');
define('LOGGED_IN_KEY',    'Ts0y68|mXxp/uVE|[OI!;:&c4l[Qx#y?$C3@+Qm,0!EC7IJ/]5Ruuy^Q,N6sP06Z');
define('NONCE_KEY',        '+(a4+%^K>8wfw:jz#og^Io/hzd`J/+<&(F-FX3OyZu%~UCn&oz6>Upfw~9Qw{=73');
define('AUTH_SALT',        ':)AE}t5Li]et[2b3Ac4RlxMo5mx!_C|u)!T+&KUv$7f4fMmcAfl`]wdy:V&&J++d');
define('SECURE_AUTH_SALT', '7X9kI-=Ujgf2v#Bf%_(bA|=jp,^==Rw-$uUM83DT`pjE(,!@mUlYTQ+1+^&8BU|1');
define('LOGGED_IN_SALT',   'ZWYx<Yj5W@cctt>Q,b?CWGtoTv1nQQXCwZO=A63HBRwQI!8DBFB(V2E#:jCi]?{n');
define('NONCE_SALT',       'iJW1/YN- 1lUKxcrQ:%{k=3js{v8n`~x5Cq-o?7{6pi6DX`3Y8QPz_`W]>-|D8+6');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrrfdpMR_';

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

/**commented out the require_once code BELOW to prevent
*  Fatal error: Call to a member function flush_rules() on a non-object
*--------------------------------------------------*/

/** Sets up WordPress vars and included files. */
//require_once(ABSPATH . 'wp-settings.php');

/**-------------------------------------------------*/