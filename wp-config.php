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
define('DB_NAME', 'lisaskala');

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
define('AUTH_KEY',         'x@7]W96|&PJo0(>$?{21BPAzUN2??%px}&@`$EC8O2Q]rLo+8iQT<=2?^w@9$B0+');
define('SECURE_AUTH_KEY',  'cfPSLh!i$u~}=pdu_}+DQY8{y+Np2O`~v-yWt(aZov_AY:a@9R,wOiwCnaZFv3qY');
define('LOGGED_IN_KEY',    '2AZlCv)>W)c+_i6){R=~Tm,gxC1eXc0v$pJQi*PxisS+hm@f8Rj&S(CX<h2,Io<k');
define('NONCE_KEY',        ')pxQ4d/^#k:t^S3!OS7y[/5E>{BJ]Z~=O5DfL|^c)|hr`/4 W2$$$,Kduxxug3C7');
define('AUTH_SALT',        'H!F.nn$<;>YTAXmpijYl<SR~eZn1U.a<4-tm44uNH#,(Wdosp=Gq/eiSsc3xNHN9');
define('SECURE_AUTH_SALT', 'cYSe {$`T45V,-ZJ_1xY#d@!*im)~0J_>/&frtx{`jw@TBe2j@lDA=IN(F_eD^0L');
define('LOGGED_IN_SALT',   'Ih.%cjyPm-5{<(g<fBW}me)PGMT V<(DRYr}d23X[mmv5AF~eo $C>j=7!J.Ismk');
define('NONCE_SALT',       '=`sr^<gHM)<[A>$@l&`OP^b{FUmIHt;kM?{zZiV&9!@wvLY#pU)e6?2]$#$477kP');

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
