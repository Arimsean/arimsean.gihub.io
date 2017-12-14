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
define('DB_NAME', 'easyjob.kg');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V343MbB65FcXOF{frAq[p]bvW|!vYOX0u^W;al ZxmvTB`7%~ fsmH@C?7r[DL{!');
define('SECURE_AUTH_KEY',  'rBk,)B:3D}QDb3-v_kNU4$*x]Nc>644LX(lSx%tW06nZaMRm8VcK(Fn^wl>>=#}}');
define('LOGGED_IN_KEY',    'UjxJ #4*qUMX|Qo9z/+a+vX#bd4vv#j%Z!/1L[O-aH>f8`pHO{k#X1PC&K noeIo');
define('NONCE_KEY',        '@[eS!@QdYjtchwXH1]9lU2Crp amzis_Gj`|+wMh7zIUTPz|eG6y>#C9#*P.{pfv');
define('AUTH_SALT',        '+NAi$b[H-VcfkRi)[LU&9xWmB7(pi&zHrmS7qm;FR4#d[FKAqDhB^?hs)7f&c,#N');
define('SECURE_AUTH_SALT', 'xC40}|jQeIp;5MV_bxp?u*p6SF*z%B:>%6.wmEI3JIW$& @}zChK`}Xfc=$sg3w/');
define('LOGGED_IN_SALT',   'C5C677=+4&ch&]&i.JJ.fc3%oTO|7#k )B.e 1wCwDU?isKMYs<V$8D.S~MNS-Fm');
define('NONCE_SALT',       'bxJVH.BCA>@bt$lF,5)E(v=s)`jU@!-%S<?~q2qExLACI+4bu8-<]sON0Hmi&pr0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_admins';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
