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
define( 'DB_NAME', 'wpplugin_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4f`?`$]_MLom6$HS_INT*`Ldpv-lb$Jj}9E&C-9=[;?b}nZkgi^tA>^{P{c]+akq' );
define( 'SECURE_AUTH_KEY',  '_g+!},wI2Ww*y8z|xFIp]a)-VUc|;4C=S^,+?/RNQJRi27{gEr&TNx*y.ZM3A*Hd' );
define( 'LOGGED_IN_KEY',    'v]_GW;_]c8_LVIY1Z^_4J!;_x$Am% eC(L},6.gUbpdtQhLn~EnS&AS]lJ?jM-0w' );
define( 'NONCE_KEY',        '[P!uumEZ9&E3=}rkk];>&zUc/dncyc$4eq{ksv]Q]0:x)nqV+Qvo]T]^ETPzmCE@' );
define( 'AUTH_SALT',        '2A_ZEDAozgWRm!zH6_:{qyhRhef!fYo9US.o7n0N<Fgap()C@y!sHj%xNb5%m4>_' );
define( 'SECURE_AUTH_SALT', 'k ?L4_-sA)54$o#QP,Y d^8pWk] Tyoo%`;.%vyrf 86*_$X_{q6[371*4PrWSSx' );
define( 'LOGGED_IN_SALT',   '-7Z|WNXfR$W[/.{J>g6^-}%+PEJ;wWZ)gk1(6L#hu{5_=h/Ze%MlKW*Kwv<X+ p|' );
define( 'NONCE_SALT',       'B%$@_X9..D&@]g0]2(SVISRjC]|ZNc-tF3u8iEGbw -e-+O:%Y/*d2%K>h~BMZ^(' );

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
