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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simsaifah_2020' );

/** MySQL database username */
define( 'DB_USER', 'simsaifah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'siit15cs2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yJTjxy[[l)rGHoMe|VTSu#k[%[q_.k-1H_S9^!Lw/*%GuH0]yv1 vXvcA0=ylsuf' );
define( 'SECURE_AUTH_KEY',  'j##e1Q>-Z)(QUlXF~Vg|i@=aI1:~[XjcZ/FD0H!egIj5W*(o5L$ABI;#dvMj&~9X' );
define( 'LOGGED_IN_KEY',    'prF{2V5MRj%@rO=5l5v%|04|#6*r},EJa;2CICmXk>z]?nor/v[g EHWe!?Se_);' );
define( 'NONCE_KEY',        'J[6]<C*2sYj07$o~)( ;fyQBLd$@S=X[V?4~6rUSF:-5vma7-dH)^]L=L&Rq;sCJ' );
define( 'AUTH_SALT',        '4>jhC^.H~}Iz.O9{`gCE;D<?!5aVhpf,|)rPmD(.O}-PW6y| )C7%s.!Y%{P7W:8' );
define( 'SECURE_AUTH_SALT', '0^PFZtW)-&i@(NwujzYJi) b7^CL<*RaW(aoqw9lKEwQCmKtP3F8Yx#k^<>#}gH2' );
define( 'LOGGED_IN_SALT',   'I7pS_-?^2RZOPMq(-*0W7C:Ne.O3]%!qUl[L ) LW4,tfqSB(i,YIxQ#[+NNa1(y' );
define( 'NONCE_SALT',       '5B`Ca9*h6=P62p-Sn%[dPL<2YX_4rV9q]c@bsybI5/=y%?fV3ww#iF;MUfPuDM)?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
