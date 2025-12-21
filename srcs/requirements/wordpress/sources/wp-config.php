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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'sdfsgdfhgkdfhsdkfjlghdfklgshdfjkgsdfhglfjhndybkbfygkvdsj' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'euRs|E3v*(C=E8n-@p;3cM%}NnE2pFALLVXe5aH<f%Xo|2.N0n^qA;zGhB=]?ILs' );
define( 'SECURE_AUTH_KEY',  ')c!hb34t:F`0n06rw;D/QEmaDoIJ0d;^7ceVpRnJ(eOqr=+CAxe^A ]b]^ w3IG[' );
define( 'LOGGED_IN_KEY',    '@mQ|eAOKj/#{JVyEvC7K1)W380Ec:#;f@P!AND-DBTPkVEIBy@s_iE<QWwWSWFC9' );
define( 'NONCE_KEY',        'YP_2$iaYr##EO<cfW)Qo:i,~%(4n;p{r8tz$?S<3%D=qXF3Y6UveCp;*M}r<suzv' );
define( 'AUTH_SALT',        '@+egQpQzIdoS=Y#Xsfii!;G=fR$$#C[/WU5b?=V?Mued:`lTEXgMk4k|1>wMra8m' );
define( 'SECURE_AUTH_SALT', 'U }tuU>32nSK|XAWbU=+OkbK~U%E]hw0C1`[ruJk <U7[_+ceV<y=;CmW-{zquv.' );
define( 'LOGGED_IN_SALT',   'QJSRSfY[l5e/Ww83?jl{,gdz@vUB.};5OG$kT;n&e`frgVL?B@UT>L!5zx-~TT7+' );
define( 'NONCE_SALT',       'JN!S8Rka$1TExZ*)MkaZ}E.=]uWoW5aE=f@W*5b}0oaec.]8?dS9UCJ$t( .AP{U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
