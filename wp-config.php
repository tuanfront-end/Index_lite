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
define('DB_NAME', 'eden_wp3');

/** MySQL database username */
define('DB_USER', 'eden_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'anhtuank53');

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
define('AUTH_KEY',         '|s>PXd7<.-[Zc>MX2RG1BoneQh?idd90U<8PQV-!14j<|]%J=o0Ka0<ShQnrp+Yp');
define('SECURE_AUTH_KEY',  'k=FLx.},X(IHI<*%w!k<KG{:/})YHlR,:MRE#kNWDJSK4?NV%t*d.ExafFaWEE(M');
define('LOGGED_IN_KEY',    ' aWvX5g!nQ&jGF`h4xDmwH4?!vJ0B~+ha8hx5}&[_!uIpWrZBzCx.lRo3uDXGL,A');
define('NONCE_KEY',        's*`=N:O%A9<d!#b4Ggo{9_^ZymlCHw6ceDr~aCEl_U-br{80O,gOXeyZXIiDRRZL');
define('AUTH_SALT',        '}EFX<bvh:3^6f<QN:bHnvcG#w|93ygI[7`J$<qI>8}<$:2g>Opa9V)e]S-6]@e6I');
define('SECURE_AUTH_SALT', '$^:q!Q2[8UtU!jL>r:r G;Q~sDdJhZO0&A!jV)Azu}-GDp):ZzPdmKhf{?IeEc{l');
define('LOGGED_IN_SALT',   '6v#ediD|lckSovpBzZuOR7^3sKH&i_5<2+WEUe.LyX*qcamDUd^>aoeJ?^2eEzgx');
define('NONCE_SALT',       '(iEpFaG>u,QT*0|D,=ZX@AVoB-MwJ)E`A@bg56$M6>~*B<w7Wy!z2|V^#(@`_Fkt');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
