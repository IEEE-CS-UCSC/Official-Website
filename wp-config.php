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
define('DB_NAME', 'ieeecs');

/** MySQL database username */
define('DB_USER', 'ieeecs');

/** MySQL database password */
define('DB_PASSWORD', 'ieeecs@123');

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
define('AUTH_KEY',         '.tqv/8tLGJ!h)V~V5$)[z;f`(Dnf5L#XN=Rr:i,/{I!;#[KBw>Bxs>LJL|(g|&tC');
define('SECURE_AUTH_KEY',  'q%=.-=d&%.!t2wCvd$| Y_iYB7QEIP<;]e&nAWCDFCFe7QGsD/UYG ?f{0*N_,he');
define('LOGGED_IN_KEY',    'VaJ+g_-so3we{?cLhZ;5CNs=c+uLD%yUU~<207ek0cPbuxda7}&>]oU[M2.S]4tf');
define('NONCE_KEY',        'cqC&~/&}Sq#9$Jd[8R(b]E;.^IX4CM7i_EIBRs51q@FizU29Q[R9NN)NT5?a1NNh');
define('AUTH_SALT',        'aGO6)O:NC2U[B,6;yJ=EDOuJv=xZuuw4,l.BD&T8fh|pv$zvVoU4-7gaD2[5y$0F');
define('SECURE_AUTH_SALT', '%bNz3j3u3#uIvXC@G-+Ii<a2yIJg<!q1Jt4(0]2H 4=5;<zD [t_O/<R)W}1QVFg');
define('LOGGED_IN_SALT',   '8fh[C46{bJci<-3u`$H+`ECLhx>+.^N ejGwot7O!H=[9XA0;0&+YKs}ms<QGW^x');
define('NONCE_SALT',       '%O}M.KmNrOiA$i)<{FL+s5_p2EbzK^ABi&=kw%{d^[i/MZMLGLiy9jlWEUz}7`!,');

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
