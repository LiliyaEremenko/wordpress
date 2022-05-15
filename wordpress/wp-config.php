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
 * * Настройки MySQL
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
define( 'DB_USER', 'yuri_hiyakana' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'kiminokoewatooi' );

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
define( 'AUTH_KEY',         'xdzX6aev&Q7Oa9=jksM(.n<A`l;wnc9<>}V(<^Q1L)Ud;;lej9IQhLV*L7002#r-' );
define( 'SECURE_AUTH_KEY',  ')/{E,e*Ns{+F5mmf&[2.ER-r*m#RzQC2fkf$V$6gy>FJHg7tF3>,`x#DLJsE^;zN' );
define( 'LOGGED_IN_KEY',    'C^3UF&{JGuu;|XQEmc]2[8F&[^es+UNj.o!lAV{81b8`f@AZcyE@jAu:Tj&s*2AK' );
define( 'NONCE_KEY',        'Wy1)7xWbW`D.Im!vUHv~q[(Gi>TDXA_6p9)u7h~&Da39M-B-Su92`qX9Y^kt||#k' );
define( 'AUTH_SALT',        'oh:`/8*Hc F^*;iI<`%lY2=*}+)V|.)XV:!Xv?U|8WC]E;T)V76NPkI8-r4z+@%,' );
define( 'SECURE_AUTH_SALT', 'oIX|R-GVvuJ9&p29U}u9k;qq s//u<-@0>+8(wX-#t1v/7*M<-eild0$aH:Eu7z2' );
define( 'LOGGED_IN_SALT',   'L$f%[y/R!TD mRmc;_q<82RrQtQ2G){$tkp*DvgRqqMbg*>l-g#@%Z.+8% yO`K-' );
define( 'NONCE_SALT',       'xB~=?|D2oo9=]L/ Sx[*h)z[<X^<kN7AO&W`hF}Nv&0w5N*,2B70IVS+S*Oqb{w:' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
