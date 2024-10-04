<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HII/ephP:?fo=J9Q_QR45B @M?gSm #>[T1Z.TEr  S$sJ(r=mFwj/YdMB@dT0Ps' );
define( 'SECURE_AUTH_KEY',  'rBs$!:rFVnB=:ZsZJ0A$A-U?m6oUHp|2hF+4kT#@ha.bK1[*r(4$}j(]4qtr9s-N' );
define( 'LOGGED_IN_KEY',    'hr@|i%:GMwh iukM4c?{CGM{c?*RVd6D$axT4*W!&?vJT7:eS50-zw=t9Cd9RX!P' );
define( 'NONCE_KEY',        'JQL5to&$sihthcZRc{d&3wO_tS6<@ZJm[FS4KfVvVV6@6MM-z+$oH[d+k7q>Ey{p' );
define( 'AUTH_SALT',        '~vTyqj^.Ot4PyMHxm,(Z^kjk0fLo_8Q!0L8QI^C_$32if)8Unhxzat?`iG;d%_dN' );
define( 'SECURE_AUTH_SALT', '+%H><VT9-h*[J|;o5yBn Hx L|AjpTfUwW%a-``G4aPGU(A,xR+FmPG.j1$Fo6GR' );
define( 'LOGGED_IN_SALT',   '@C/<m>>}U]|}U>UJ~,B3KBQ2#rm6XZUV9{xs!1m&{|-fSn55LQw-60^X)lPOO!xE' );
define( 'NONCE_SALT',       'vF.F^..|DJ_{sfMkK:XzucWZG2N+7gcYuF?EydhoY|,m4i4HW7i}4V~c4p-M)g>6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
