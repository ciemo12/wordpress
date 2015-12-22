<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'przemek');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<{*H-DN_Zl__:NK&:v_|Ut 2.@|46uz~#[xsE|-LNp8X]*)l2a<>8I=|0>]nf?{}');
define('SECURE_AUTH_KEY',  'rhZSIz>JON9C_GR^0|6|7oKUPxoI* >XHT7u#LO|y:FZ;sB(|%q9%U2jS-zD2cOY');
define('LOGGED_IN_KEY',    'mQ]o44>JV8-2`qq;tD?!8ahDm@2?z<Wim6>Xyy.Q@X&L?J$-k FMfY/I4Zz~#L_j');
define('NONCE_KEY',        '*4S/4@,@db<|OeO;SC:<he+-|ta,+z.3(fw*A=57VcVbMkZg:%.dSmW$<.:FY-)!');
define('AUTH_SALT',        '+zWv-_[h6@=<*&|+17[`*o b*9xenebV#|IWk? LcO)rEk^&(o{7u-M.6f!RU[EY');
define('SECURE_AUTH_SALT', 'AcC,ancso@DI,lxTa3+!e2u-kyDBcJd*-hL2I52<>!F)*]^mh@7[b`oAocQ+Y>=F');
define('LOGGED_IN_SALT',   'D]@;}txX[F=s~RwJ6D1u^<Bw%YpNnE+;2_|+[&4|icu0,aISA;j;9A>NXXCd>)0~');
define('NONCE_SALT',       'fHQQOlYOmr,xd7}InQ++$tV%eh2fn)j_}Jhn)%c7^edp<%-[K{PztJSso8lmfcjU');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
