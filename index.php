<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 25.02.17
 * Time: 13:32
 */
ini_set('display_errors', 1);
include_once 'lib/db_connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Title</title>
</head>
<body>


<table class="table"">
    <tr>
    <th>ID</th>
    <th>Заголовок</th>
    <th>Описание</th>
    <th>Ссылка</th>
    </tr>
    <?php
$query = mysqli_query($connect, "select * from post WHERE id in (1,4)");


    while ($posts = mysqli_fetch_object($query))

    { echo '<tr>';
//var_dump($posts);
        echo '<td>', $posts->id, '</td>';
         echo '<td>', $posts->title, '</td>';
          echo '<td>', $posts->discription, '</td>';
        echo '<td>', "<a href='/show.php?id=$posts->id'>Подробнее...</a>", '</td>';
echo '</tr>';}
?>
    <tr>

    </tr>
</table>
</body>
</html>

// ДЗ создать таблицу комментариев инсертом к постам
айди  название коммент