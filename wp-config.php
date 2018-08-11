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
define('DB_NAME', 'coding_ninjas');

/** Имя пользователя MySQL */
define('DB_USER', 'YOUR_USER');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'YOUR_PASSWORD');

/** Имя сервера MySQL */
define('DB_HOST', 'YOUR_HOST');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '}y0W5WLisGw9*G*G.ud,IzUr&46CGnpnQCZ%7OH6X%D-CK#W+wm[J}z4ZNM.i8e,');
define('SECURE_AUTH_KEY',  'O<2=zD+uGXaUcFgfd]Ut5+9T#?Hb-##hJoL=&rZ5+9(dx~:Xfje{I4)43?=uS]V?');
define('LOGGED_IN_KEY',    'j7S,i&k0>}-:PibGD*3UW,a(/N#K3:9(`M-J.,1UGE431U`rKC|4#r10>,x{pK#m');
define('NONCE_KEY',        'WO.+D}4L+8Y>05htZX0(dLL}4b_5[U+^{$E[wQF!+]K.#ybF%t,;y!zXdwGPMlzc');
define('AUTH_SALT',        'B+d>_/XFh fFq~|oKBy</mz6N4y:D%s41;Bc/{hw/@%WqOe+%=[!Cr%eD,O2N Vo');
define('SECURE_AUTH_SALT', '&pGX}Q?0@&*[wA3G/Z!? i2*H1!Xx4Aa8c[{L~;{Vi*zPpC->cKhg1K[Wb.g,ucW');
define('LOGGED_IN_SALT',   '}A*<E1<xX`z}xRIt/6|ev`)4[HWcrph+P)Z.)*%FPYLqw/MoO^-m~)8nk!/VXMYJ');
define('NONCE_SALT',       '6nE$7HDr%,:?/.IaRVx:KX,s+zl9 ![eY!oDIKWLD_<=QYy}qQ)`_vTZ9jkhkR2<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
