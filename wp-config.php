<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kafe_lyi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't TD015B f^FL@40Uj?%FitwA-wUiOa{:ME3_e,QI3@MpTAzA-dD4iK)=)~6Ic>M' );
define( 'SECURE_AUTH_KEY',  'alIo}Zb|4*kW4?:jqG^JxYP~/c?]M[_`#m}n=%e/-|qt@9%F@vz^<Q^IGw,^|-kN' );
define( 'LOGGED_IN_KEY',    '2m-rh=s-0ye97Hqd*rvSlK>fyLl~o 2K(OW=UPfUXqbJSsb|[z?dH_%rQ8^VgB-<' );
define( 'NONCE_KEY',        'MLq[9vCbC<-O:W3&bh.=TK@wrhD3Sugz:1koUA!>1%Mko>!wOV3%q-g#v8G7:PGJ' );
define( 'AUTH_SALT',        'dc$.3-o,;wRv$!!G0jYc%:`#@VDBl)jEWsrwW=Z/;*b2[rF,,15-`BZC9tENCk+z' );
define( 'SECURE_AUTH_SALT', 'aPXF(!Z^+l5 =r[dLW[fBncy[?M?(-Ffft,vsZ3 &:M1!C21)ChiLa2D2-nNAA|;' );
define( 'LOGGED_IN_SALT',   '=Y_7xh#nvg I,(|*L+_lUuVBcT{gz~,IbUoqA]3C9hUKo(&DV<2UEXZhb$0W9mrk' );
define( 'NONCE_SALT',       ' qa#1-/DT,%zd3!$QBv``/,TD GPsA7ymb>f1_j5&,Kw3c:/oL>(K|RK69?*Hvcr' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
