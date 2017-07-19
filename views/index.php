<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple MVC</title>
</head>
<body>
<h1>Hi, there</h1>
<p>Это простейший MVC framework c поддеркой ЧПУ, разработанный <a href="https://garik7012.github.io">garik7012</a></p>
<p>Для доступа к базам данных используется <a href="http://php.net/manual/ru/intro.pdo.php">PDO</a></p>
<p>Настройки для подключения БД находятся в файле <b>config/db_params.php</b></p>
<p>Маршруты прописываются в файле <b>config/routes.php</b></p>
<hr>
<h2>Данные из тестовой таблицы test вашей БД:</h2>
<pre>
<?php print_r($checkDB)?>
</pre>

</body>
</html>