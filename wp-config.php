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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'master');

/** MySQL database password */
define('DB_PASSWORD', 'Priya0607&');

/** MySQL hostname */
define('DB_HOST', 'wordpressdb.cysxnywgib9e.us-east-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'j5OdJx{|g0/,-@;&<cmqthoN]/?^JiMKf<*_oeeiJAJEKO(f_Y_)<#M!UfO00@kZ');
define('SECURE_AUTH_KEY',  'vGA@N)_tyEOl5I/7jot5cw*|u:CnE{Gl{/RKdUlP`}j$y/OUk:9t+ey7/])eZPqm');
define('LOGGED_IN_KEY',    '.P.[ioF4Ho[WIbW)@b6NOPUj;Hz-]YZP^ykrnYbTF_hpydaf`_:@w!HICO<p>|0S');
define('NONCE_KEY',        'ihMxPM+AS4u+{@}uNgne|/neZ(F:=u.iFRA<zIIIEjo5(hf2WZXDYev)->s}=8e+');
define('AUTH_SALT',        '|D9jDZCS?[e|foyZ8j=m[5gIP= e7f+:*.a`{cp*S>?UeZ,rD`Lp1b6T~C~b?0JA');
define('SECURE_AUTH_SALT', 'QCo6nI}>KhFJ2$ph6p@Fpj{p(645E>-[F%PHssm6D`J1k#z+li_}X,t0Ni]6Fi<!');
define('LOGGED_IN_SALT',   'FgHq6r2hE.2 {g>B3#!^=yl 9Hl+6ey9F~@WVpP},A{:UKMhJf!n*#)H<#%=LRfx');
define('NONCE_SALT',       '5yX95pB.MB+`z4.I6Ij#CRye*3m0z:+wcTxK,xU~&0Mn7!mq2mmIAa8{%^?_yTUV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

