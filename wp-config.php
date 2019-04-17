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
define( 'DB_NAME', 'examenkt2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')`*;v,@R$8^nBvqJ)j`,TMPNc29!$*42+&SsO#:HT`1#%Z2T.8Ix%//b|K0y3?-C' );
define( 'SECURE_AUTH_KEY',  '^],T{C[Z5x#(:(VN4$>s;){=BJ5V.rFQ.Ndy>*|4lm1wH~v-;.HvH2f9_@#VBw%i' );
define( 'LOGGED_IN_KEY',    'ZKd$ c$>|R!*F~m7^W)g`{*0qNX.:IKd~EFW!.n.R[Vv~L5]jylKxr1|Rb#j6ISj' );
define( 'NONCE_KEY',        'LPBuMZe,|p$p&#c5naM3n4;d>DZexC[H_Z,iwC;F?kTY):H?h7Fa~B0.rH6<lG-u' );
define( 'AUTH_SALT',        'K})g[!XD4N+:w`^NIEun+YrkDS]p>t{ ?7XP_;l/x.UQpgV;F8,ApAc9Vx=YCsW3' );
define( 'SECURE_AUTH_SALT', '<7Q#x/vP0#HG@p*@<]GT?_j!*r.J;UGf@dht=yy!|EGRCqlFKTN,p.q?G+;?uPIP' );
define( 'LOGGED_IN_SALT',   'z2u4uQtw&%sAIu0<zg/a.,d<E>t8_rg>q1>}]F>IkmibBOf>2Y^7~J|!J1[*+>>U' );
define( 'NONCE_SALT',       '5|F7)TQ<PudOP~<,JH-=emY]+6C`>$h?@Cym|JW?l(O8]O$h]`vG{>#LgR]@|%PS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
