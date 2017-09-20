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
define('DB_NAME', 'wp-homework');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'O{K=tOS:I`w_kNW3lb.F(>-v|R.X}8j{-31VIw$`P>y*<rSjqc}0h8k*O(9NhGwk');
define('SECURE_AUTH_KEY',  '})$?CWuGkU0l+@8116B43DuuO4A!x<5&Xk@3ki0>JcWdeSdCAjl{d$H0.X,O2]ST');
define('LOGGED_IN_KEY',    'q(tU*]O+tfM1^]CL:W034eezM__=Y+.(hQly}KE/bMAztIGW]lF`LH6._z>|#o-e');
define('NONCE_KEY',        ']W7ING=wQ97qtB.CmJFLY,lM,rl$r;#C^3~dAj=cIyt(h~As2J>/1BP8t~Y>l<^Q');
define('AUTH_SALT',        '5H.#nDxy5aNJJ*K84@5T|S(qw4Wbs1];`]f_sT)Oyk3K<z5kElB:#9p_.rrre1Ka');
define('SECURE_AUTH_SALT', 'KcsKm8`#%@Q(SRmTej<%si!C(LJ_W$6;yWQ8[gH>%[_,MUGm[vFm +-/Ea{!<TCY');
define('LOGGED_IN_SALT',   'tkhwPL(.V;gfz0fTcQR8z)-c*raMo?7/nk}Z^XwJmg{`rK0f&Lvk7S;ORD *F&F`');
define('NONCE_SALT',       'ZZH65[u2C0$C2tVA&bGPu?d~]0ah@_Sh6Ckc9@Jd?5L_C /|l4$Un#>drLZGV2<)');

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
