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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lucia_kolace');

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
define('AUTH_KEY',         '0B$qCf~zGk26jUJhq?iSr:8]0n[+<F6m,)ECuq3AEO`o$9, #b FxdP(`<DLV.+h');
define('SECURE_AUTH_KEY',  ';t`>T~ute LFU-+yao>~9/z.1)^vMEL?0}>{.EsE<5*`W6HIZ4_e6d4*:Gk5oQ7|');
define('LOGGED_IN_KEY',    'uc+u:?.5JwvnI(%<HhNrE>,r|N+nC{}ukw!_cb1w1wP_-f~nyY0F*jVx(U=35}*)');
define('NONCE_KEY',        '%s7xEcJ_Djp=9+-duml#wceUUg$@o{!/UH`.hABQLb&&~RF,?||+~s=^~}KE3O@/');
define('AUTH_SALT',        '}Nk5cMWMb3,bu9F_BGNO>eI21iLuxwJGG-xwX63Jy+x?C8qR/y`mzYpD`:riv,dP');
define('SECURE_AUTH_SALT', '`uk*:9JM;.!=:ri@AZq;{j%#vE^peuc2zx7v/*)@;6C5]==}EAyr`HmS?|,hT5||');
define('LOGGED_IN_SALT',   '9A%:yNFv$<b%o1C!-S{Nk19a6304TrubE;w;/Q)s/h!L$=|UKHZtu6#@yN^1(3l!');
define('NONCE_SALT',       '4sy,d?;*<0iNx(tf$(?rKWk @-qT|-kSx[?;Eo`0-^PombV>|`d.6poi7 nE+Ja=');

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
