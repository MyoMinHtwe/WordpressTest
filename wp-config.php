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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~D^*]g@G~[)GOx4`3r+6 ,yvtn}@k.45_.Y7+ :D03i&WyGK[tcvmzK.u|`,K$C:' );
define( 'SECURE_AUTH_KEY',  'DaM~~n9:iG09#bMg]7ifELj6#fn$AXWo?>CA[XoS^/}x0}.E52<*&#K.JBxDMld^' );
define( 'LOGGED_IN_KEY',    '=azX-?V^s%k22pMYf+s(|W1(~dz81Hb2$m+wsZ5E*A|wDdC<6G$gTRbQ7vS|2]O6' );
define( 'NONCE_KEY',        'Eefo,LSAG} E8eXI(%ryt^[$W=L4NhsGN7SG_3TPC9JH*ec Gx{LYRO&&1R@sdEf' );
define( 'AUTH_SALT',        'yS(lTt:ut6zuZpkS,3SU-2|$|d=KsPs0F$DdY$lJtFN#1O]{rOhOumh4>9}PJp5~' );
define( 'SECURE_AUTH_SALT', '~e]jE=bywTP^8lvWvY8n<of-11Z` W{K!5:0;tD4R[VZ*Yj?bV0{CaF2dI[4ijDB' );
define( 'LOGGED_IN_SALT',   'XOW t`}{~f:q}ntW@`-$g}+t:#]jT}REj#SVP-#W-.GJW}MOp:ec?59zzcP;6C%H' );
define( 'NONCE_SALT',       'I3:R}Q]!,m~k5?]M!-MNWXa-nI3n{VEUnSH0!y)l=d=SF7uXq0=NZJb47Yc;Suq$' );

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
