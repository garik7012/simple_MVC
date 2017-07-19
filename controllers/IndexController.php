<?php



class IndexController
{
//отображение стартовой страницы
    function index()
    {
        /*
         * проверяем возможность подключения к БД
         * если подключение есть, то вызываем метод test_db() модели Test (models/Test.php)
         * результат заносим в переменную $checkDB
         */
        DB::getConnection() ? $checkDB = Test::test_db(): $checkDB = "Нет соединения с базой данных. Пожалуйста,
        проверьте настройки соединения в /config/db_params.php";

        //демонстрация post запроса
        isset($_POST['test']) ? $post_test = $_POST['test']: $post_test = false;

        // подключаем view в который попадают переменные(в данном примере это $checkDB и $post_test) и в котором
        // будем формировать HTML для показа пользователю
        require_once(ROOT . '/views/index.php');
        return true;
    }

    /**
     * показывем 404 ошибку.
     * вы можете создать свою страницу для отображения ошибки.
     * например /views/404.php а затем сделайте
     * require_once(ROOT . '/views/404.php');
     */
    public function showErrorPage404(){
        header("HTTP/1.1 404 Not Found");
        die('По заданному адресу страница не нейдена. 404');
    }
}