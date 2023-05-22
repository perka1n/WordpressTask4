<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c/Sz!/~_)Rt0Xq8Q|,3<sCkNQ|hq|xcu`8qU7#Ya5m~.XA2*,ErY*E!,3se#M+<V' );
define( 'SECURE_AUTH_KEY',  'HX:uQcwR V<~;[poy_(1f(!Z75Cu{l:(_ee9ty:dg{ezh{|I5$o]YwMuC3U:{^nX' );
define( 'LOGGED_IN_KEY',    '.X7uFc[:*z2_Pyl+MzizfV3q%dR:r$yl3@j>rNi-oGj<OF}`@~R 149{2O/Uw=9M' );
define( 'NONCE_KEY',        '`/=,zUZOQOYHp;odPg=*z;s=Odjg?13#d~gSz w#+Nn.>cJ`HTu/qd{)rYANDba;' );
define( 'AUTH_SALT',        'E9-p(0$XJ)H56-Xk K)ix%.ByF_IW3:x*Hz9Z[<i R=LgR&02Tb68.5{Uk|UF:<Z' );
define( 'SECURE_AUTH_SALT', 'nWYrv{vvvG@}=_2`-{TsLj;_`*t-^/#x]@:.l6Ph)^CMK+91DXj.P4Ah$N!D-(Sf' );
define( 'LOGGED_IN_SALT',   '|`Wm`bA2EqEAm2,n+]H|ngGHZl,15~nJOo1VdX@FT;{N&^YWyN7`%Zd.;4M,0xy6' );
define( 'NONCE_SALT',       '69:H-h{/fT/LpIY%/6DG?&0Lw(HZ/XG;&LD*Mics)1BR-b+gMmqnpWn WX1,,y_p' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_wordpress_';

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
