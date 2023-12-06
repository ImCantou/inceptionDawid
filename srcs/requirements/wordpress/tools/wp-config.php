<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'qcherel');

/** MySQL database password */
define('DB_PASSWORD', 'user42');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'u$p--cT(e{- ||dWoI8|D543b}2O4~4L(z7vyHp:Ba[FJ/0!,j6|)75{GL-q4zU-');
define('SECURE_AUTH_KEY',  '/=+A%K$9If+$ )%O0|0PmKILz~V%x}C-zXzcU.GQN[~I@6<<9&+j:;`fnN GeCI`');
define('LOGGED_IN_KEY',    's6EhQ2s<~@oCw-)b{p|@N.Z#uC$TKi^iE.yii#O|;S-I1=.4swDwKn(|RD)4-BY[');
define('NONCE_KEY',        '9^a#AVqgTYEK]-$Zq1+-H%4<^[n~adLNV9n^532_7@33=,-jAO(<(T~^bS=0|qL^');
define('AUTH_SALT',        ',aiQETz2(ndCYHw.i$0i[OpmM_dZZA!)GyQJ#bRs|,BurR.G67Z-m9x}v,M~.f~,');
define('SECURE_AUTH_SALT', '|,`}_epp``vMKe3V3%vu7wI@~{dBz!>aD}aWw2[%._Zp~I6[4@@HmvI#V[uyU*KB');
define('LOGGED_IN_SALT',   ']xWv2X!8,COteeOVg$o+--*!%K1SSz{P$c0^&Vre#/,+7f:t6+||:h&^i5WqmvQK');
define('NONCE_SALT',       ']Th6c0.YIxM q2*utfl;q8<g4Z4HS}oM*53l{%OMYN{c+^c3*|lLK6hQ~]{z -{9');

$table_prefix  = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', '/var/www/html/wordpress' );
}
require_once ABSPATH . 'wp-settings.php';

/* That's all, stop editing! Happy blogging. */
