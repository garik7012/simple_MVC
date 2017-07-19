<?php
/**
 * подключаем БД
 */
class Db
{
    public static function getConnection()
    {
        //параметры берем в конфиге
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        try{
        $db = new PDO($dsn, $params['user'], $params['password']);
        } catch (Exception $e){
            return false;
        }
        $db->exec("set names utf8");

        return $db;
    }
}