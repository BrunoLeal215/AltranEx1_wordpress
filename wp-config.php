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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' O*=Rb>-s}M:>V?F%:-&rHe45]CfIkIQG+KP.,D)[K};|TIQWA&rtdnzza%v5-1T');
define('SECURE_AUTH_KEY',  'd~!.`mT+|oye,BtiwxQOQ8Ye aEK#&-((A_qbOe[]qw_IQIH1[4D9|u:p9b8xcrS');
define('LOGGED_IN_KEY',    '{`3#a_FTEYpSj81jm6-Bj5DXsYfP7?uo6/=+#ciX:G(Z6rXB-YUY~l|E^nsq/$CL');
define('NONCE_KEY',        'F4-fIirs+}dhDe-cPq`}-_=Pv2||6|)-|~M]vV4Q!XO}3:8>7Z6rS)Io|cqLcUMt');
define('AUTH_SALT',        '2y%`|m-0.lyX8mj]Y?a(=v?vg%THK8?zsR |^Y,Z9P~7TB=H<wycTYc -i>rK1~x');
define('SECURE_AUTH_SALT', 'yvxsp}GT7/?JELB,*UbX{015?H>xV~O]I}f<#0W$|^Z$.A&er@U)]pG+$P$bcM;>');
define('LOGGED_IN_SALT',   '@D[(V(;c.9|7v$}yna_Bb(G93D.i7iv[dGsc3}1j+q+=>KjO!A]K8IU+BjVE8FyX');
define('NONCE_SALT',       'h_3IZC=X<Gj*Rib`d:tO!)*F3lblXjP`Er_hv_+@Gla8n|A+|rg+woIX=9Fz<s*N');

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
