<?php
/**
 * Определяем параметры подключения к БД указывая их в константах
 *
 * @const DB_HOST
 * @const DB_NAME
 * @const U_NAME
 * @const U_PASS
 */
define('DB_HOST', 'localhost');
define('DB_NAME', 'time_tracking_db');
define('U_NAME', 'root');
define('U_PASS', '');

/**
 * Определяется функция автозагрузки классов, которая автоматически добавляет
 * код класса в структуру php при первом обращении к классу
 */
function __autoload($class) {
    $filename = '../system/classes/class.' . $class . '.php';
    if (file_exists($filename)) {
        include_once $filename;
    }
}

?>
