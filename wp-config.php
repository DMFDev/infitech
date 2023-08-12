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
define( 'DB_NAME', 'db_infitech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E7$(#V]N57V:F,!ip<imHA(c!^$(ZoMz=bbnOm[:XkcW.^[)up%-[GYqH~c]E_[ ' );
define( 'SECURE_AUTH_KEY',  'LrOp}DZE/ei>Iq`>j]h?JkxYE!qLs:13m9&Dzh ~2-Y6^=#JrYaIo5Z#-Pr|gs|A' );
define( 'LOGGED_IN_KEY',    'Ij)10AR,Wz(uHuU9w}@rcu>*YIG%@+zGrWVfScJt`Rs0kg,ERZ(7,>F0J|ewFxxB' );
define( 'NONCE_KEY',        'd{<Uff+6Es)7pN}r9?V4Q,&!7x,LiP{g3SJ/TRZ<WCl{o/}:Y3I7z4>JgA_] ~ (' );
define( 'AUTH_SALT',        '(6:Wa.r[n a,7C{jv;eVfiqUsn63E];n`.e::&Kv{#@FZ`z::x{@K2RtS@}GGx8R' );
define( 'SECURE_AUTH_SALT', 'vQ]YYHe=YrR.;+91+hie@SPfsWl)$E;A[BfI CF~)tMLC`PBMu7NXhu`m7ch(fBZ' );
define( 'LOGGED_IN_SALT',   '7$JMFY45=EOM/Y-gcg)[lrTl17?!]g=s$O5B4N_6rp^MN08Zd0%!Cck`}iGI!dY$' );
define( 'NONCE_SALT',       'Exg?.GGp-C{!5fT$m)lORNi03,mdz!)4rH@[.3 nZJGgy;9<u{z{t1+8{}C-8{l_' );

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
