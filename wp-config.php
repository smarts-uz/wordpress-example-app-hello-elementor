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
define( 'DB_NAME', 'big-sample' );

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
define( 'AUTH_KEY',         ';}]?J9pIdo.eO ,LCTz/PIjh+tQk|w^KRw*(+W4AE}dnK.x9c. y:y VzbKA?+.f' );
define( 'SECURE_AUTH_KEY',  'l$fM-oaB<5kqo}n*K+u{l(1_^(HV8z.fG8Gtx]kby~Mn*mn;Og955;RK^bMDE_VX' );
define( 'LOGGED_IN_KEY',    'vrY2Z&>xdV<Ou9pVkB v&e8v*RBZj>,?rIG:dNI4zw:C0nYctKjc2A^[F7n?1vA8' );
define( 'NONCE_KEY',        '[rc?Tb|5|ot?dS;jMY%t;pf$:B9R 5[&2YEP&DA,^xUvzjCLW~aQ(%%{yaW=K]ld' );
define( 'AUTH_SALT',        '9#2y 7v+0Yy3+psp~qyw-3RmWvu!3l1S4|C=a%m5$PS?I;2Z;ZU7KwgXbLx/P7&%' );
define( 'SECURE_AUTH_SALT', '{a{s&o^hA*wSfRJo+uN}`v/-{}i?o&:D^[w}DX)Zj%XOjduJjR/1wCTJVeBxoR}(' );
define( 'LOGGED_IN_SALT',   '=Cq*<v/x5A@Fd;9JQJ!niiZo*z4yL~B9=N6&RUkv]l>;^0%ly=W,{5h&}QAHWStn' );
define( 'NONCE_SALT',       'x2TVB{5/A|kpy-@mkSod7n(5&w0iqR%;-*?~A-4WU fXAm6.hN*lyp*J~Y;O9@Yh' );

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
