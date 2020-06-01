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
define( 'DB_NAME', 'wpdev' );

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
define( 'AUTH_KEY',         ']DOi[$k|`V>dV:IBRD+^n:+Q%cP}+]_dOiB)@Kbljqe[y]dChEo+=F`$[4DM0WMR' );
define( 'SECURE_AUTH_KEY',  'aT7.RVxuE;^H`>aYrtZw9p4k2(z8,&;rh:g2|dUahSC|&+4m~}Lwd[)MjuhIcfXy' );
define( 'LOGGED_IN_KEY',    '5z:o&m<cMfZ6Wr5:<wA0q9cD4{^T`G./G w^$]7R]rRWnHLDY2r)R!uLniz|XY[*' );
define( 'NONCE_KEY',        'UwS8 rMql<!Dl~cIAm-49PT@EM>F#)!@/iJLA=Taq<9Nj=W}$E;Rc_HQ<I[l%z}4' );
define( 'AUTH_SALT',        ':jie}-kC:$@QCq+VZ9v1zV{7E}+QjlIY3tJX;0zKyt=e5W`7Z%hRt~h./W5BNZ#3' );
define( 'SECURE_AUTH_SALT', '<*Qy(8Y[L`E2f+OZlF!51V,_V_e{z~>lURhN@V|5+.;X(J4H)1=m=*mN0VIu(]a`' );
define( 'LOGGED_IN_SALT',   '!.m*}!D~oEkXY|:T8PcoS1_9h,7;!4A,:>mlPG16Ai21p[u>!^$iN9_6Y~xT5~`H' );
define( 'NONCE_SALT',       '@{4? u@+B;:d-!P&.o[6HO%&UZm{+Q,F7m34^E5Kkb>q|V2_K;:CODs/[2q)Amdi' );

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
