<?php


/**
 * Class Test
 * Демонстрация работы модели с базой данных. После ознакомления можно удалить эту модель
 *
 */
class Test
{
    /**
     * Тестовая функция для получения таблицы `test` из
     * базы данных, которая указана в config/dp_params.php
     * Для подключения используем строку $db = Db::getConnection();
     *
     * @return mixed возвращает массив ассоциативных массивов из нашей таблицы или
     * возвращает строку если не удалось получить данные
     */
    public static function test_db(){
        $db = Db::getConnection();
        $sql = "SELECT * FROM `test`";
        $result = $db->query($sql);
        if($result){
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        } else $result = "Не удалось получить данные с таблицы test. Возможно таблица не создана";
        return $result;
    }
    /**
     * Если данные приходят от пользователей, пожалуйста используйте подготовленные запросы
     * Ниже представлен пример добавления данных пришедших от пользователя(имя, email, задача, ссылка на картинку)
     * в таблицу tasks
     *
     * @param $userName - имя пользователя
     * @param $email - email
     * @param $task - задача
     * @param $image - ссылка на картинку
     * @return bool - если все хорошо true, иначе false
     */
//    public static function addTask($userName, $email, $task, $image){
//        $db = Db::getConnection();
//        $sql = 'INSERT INTO tasks (userName, email, task, image) '
//            . 'VALUES (:userName, :email, :task, :image)';
//        $result = $db->prepare($sql);
//        $result->bindParam(':userName', $userName, PDO::PARAM_STR);
//        $result->bindParam(':email', $email, PDO::PARAM_STR);
//        $result->bindParam(':task', $task, PDO::PARAM_STR);
//        $result->bindParam(':image', $image, PDO::PARAM_STR);
//        if($result->execute()){
//            return true;
//        } else return false;
//    }


}