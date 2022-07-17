<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-db' );

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
define( 'AUTH_KEY',         'ZpG6IQ:=4B<0BTllVzHU3 .@S?irQpu9]c-9U=8/*2D2J/+o}(m5z&~G2u*@uX[o' );
define( 'SECURE_AUTH_KEY',  '3[K-e#G(5|0aQ94&zh?NAuxsYJ+6BiZwmgAsw;4jbVBg%t|@pA:CiH#2=pSbmW+P' );
define( 'LOGGED_IN_KEY',    '_Br<p>-RkB-4`C3Maw$^PQ-! ?mi&rHnq&:iRb96$[#XzJR<pDhB6+}nO|z:2~Q/' );
define( 'NONCE_KEY',        '&hy:mp:gvhdf-%HN>5@7>pZjEJPB{n?I9uD;6,78gu7kdP?3Q=>LGpyM% NhHR1(' );
define( 'AUTH_SALT',        '(8d`8!ZgvcL(NJo<QnQr2NK(7S]=7(~powFm[U;Hjq~sAAJ..^[Bq(y)=oUB=yZk' );
define( 'SECURE_AUTH_SALT', 'RPaM)>46gc0hnDRpkG-V.<j<<ttHfH`&p4JVR1kRMDqcBcM>Xm06&$3?38}b,>ow' );
define( 'LOGGED_IN_SALT',   'yoR*MPS;UrT=N9iLT=+Rp<P^<H!iB-%>b@msje8+)z13[NX~/T&7Fpd+x^tI(h)?' );
define( 'NONCE_SALT',       'irNU.U3E,3gwhSv1B9!#jwa}-:R$R^|/H%~2B2(S#i>*3qEg+uj(9;lyhh.Nc_W!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
