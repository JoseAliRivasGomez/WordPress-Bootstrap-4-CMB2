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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'escuelacocinadb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'myrootpassword' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         ';uA&P1@v5aCBT-@5W*2b9!7J%T?H36>Gp_s5uPq&wUH].3?icKS)oWOqSZ$#lO?n' );
define( 'SECURE_AUTH_KEY',  '3Gw{*zo(H58]Qd`~`>n^A;JZ?J2EF7hB{)DaE>)m^<$S2}y^5OL:)^6W0h/sz|q1' );
define( 'LOGGED_IN_KEY',    '&EE>:c9CxL.&v9P_DXaCA(rxca>v<o%uxl2RzV~>U*WD&q*izBIw2s6vkl|gt6$;' );
define( 'NONCE_KEY',        'DJp#`{b;s|i( &kFNiT3P`UNOMiNF.>X8K0#1^YJQ_?1~8Wo)$d?!Zs2moPXpZ5/' );
define( 'AUTH_SALT',        'ruB/W)#r2w8o]EN,:&H4C!WzTHW]7%Vou7iD<Rg.>[X5{N@gOM}?{^DE%PJhJtE{' );
define( 'SECURE_AUTH_SALT', './p:5j2I/#%NEKe8PHJ%`HP=24|]eA]Ui+QeRV;>hpd6t$&(bN 0bHjdywrs,q@G' );
define( 'LOGGED_IN_SALT',   '$Dc$&V-)-^wU5&n|nbZ4M6|2kKIx.ji0+vfl#*5^DQtHI[W:vf4A|bV(3$#zRCi;' );
define( 'NONCE_SALT',       'J~SueCR||e7Ogy}iUNJZzodB$Li|Qa6n5k91@>@KL&^/EM*^?I}r~Bk-$}DNXz]I' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
