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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rubikeff_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'rubikeff_wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '48^^iHtB6c' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'rubikeff.mysql.tools' );

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
define( 'AUTH_KEY',         'QeyEIu!5.Q7Q?m(a/IN6iKX:|TlG(`NemRD=!cJjjLf &sa6OaWn0o74=d+8X;`j' );
define( 'SECURE_AUTH_KEY',  'V;h~x>Q7s%GYyI<[R&e=yEpNq%_+2nA~fm=*.yh`$sizhsTHs2~j.yXCMx|r`V1V' );
define( 'LOGGED_IN_KEY',    '!E|]7SU{E*+l*9a,BZ6Q8d^]s_e}*`m:hVubDV3,h8wf87h_q/j#{m^1wxzU([sy' );
define( 'NONCE_KEY',        ';Z:l}<=6FW.KyF*Vl&W_f;OQ]Vm#}!4uL(48.,B,(Wg,avDO4Y9RI&^6DdGMa$ux' );
define( 'AUTH_SALT',        'RvAG(DsuzZ{HN6gKh39$>%T3{e!L:<(h!On02nvf5~vkXZ!LhRBz?)Zn)z7&s+ff' );
define( 'SECURE_AUTH_SALT', 'Qm~0[Z]VWTE7I?<EP4YUq:<6m E|*uUATGn9m)|-2,e&`mIDN*K]kh$%1Ig.6_CY' );
define( 'LOGGED_IN_SALT',   ')<E@K`)& Aa2gM{yRq8^ma|w^N`}r~?=3g7)ybinKB<hUGS1^~MD,7ObW1Pp?Cja' );
define( 'NONCE_SALT',       'Ab3Zon.HMrlG2b:D<&{u=8(4rdi>&Q.aNe-ox7<%-:+clJ/PI(<s[U=pQp,I0<D-' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
