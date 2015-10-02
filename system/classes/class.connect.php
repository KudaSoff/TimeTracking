<?php

/**
 * Это класс отвечает за подключение к БД.
 * Создание объекта PDO.
 */
class Connect {
    /**
     * @var db: объект PDO
     */
    protected $db;

    /**
     * Конструктор, который пробует создать новый объект PDO или выдает PDOException
     */
    function __construct() {
        $con_str = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        try {
            $this->db = new PDO($con_str, U_NAME, U_PASS);
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }
}