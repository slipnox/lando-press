<?php

require __DIR__.'/vendor/autoload.php';

/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', getenv('DB_CHARSET') );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

$table_prefix  = getenv('WP_TABLE_PREFIX');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~XzQ;j/%_gBW{Zd]_1q_cO695_!yRQ*/S5`p3N3IgL7GVqVI[[x!&,0F=fb{?+/7');
define('SECURE_AUTH_KEY',  'PVhjqvo7~mXUQX[9A_:|mwEHgmvxG7l2J7z`N+bBR@]Yi%%8z^4H1-/GX5+#Z.8v');
define('LOGGED_IN_KEY',    '+,4G<4cOCvKSqxAh6:JyMXD?&3}b@*fvw8W@ P.R&R4PF/Jt>A]Ea|;0:?h*sIE0');
define('NONCE_KEY',        '|eZXfcAt%f_|-i48,JzE~yv2#w^2U7SFGh#kc.9R-$@~MZ+BqGK#41z{XSf7>(qe');
define('AUTH_SALT',        'daGL0;zxw)8%ufQHTuDT6MW;uUL5x#s4?HyjI1qGK.D9zJ8)J>ci)k%o,@c5<[qJ');
define('SECURE_AUTH_SALT', 'uuF]VUqGguqrFI27KG/x|$EA`QqC?F<vkuLiKv$Rtt%EIH(Li8^.Y)flX;DRvD;I');
define('LOGGED_IN_SALT',   '}CNZ?@h2%0:<Ub54Q8m=5DIF+{9mEaqbHf;b8V{:wfZv<=cCeXZ7|iz=J5.a5zF%');
define('NONCE_SALT',       'T.*=;5,DfWg;?Z@b0]y#Q!e_*HQ!c?<GT.T;j 9mWTAvG:Ntg,<-rH.r[xC$wdny');

define('FORCE_SSL_ADMIN', false);

//wp urls
define( 'WP_HOME', getenv('WP_HOME') );
define( 'WP_SITEURL', WP_HOME );

/**
 * WordPress debugging mode - keep always on when developing locally
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', getenv('WP_DEBUG') );


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
