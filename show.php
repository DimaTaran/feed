
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
<body><?php
$query = mysqli_query($connect, "select * from post WHERE id={$_GET['id']} LIMIT 1");
$post = mysqli_fetch_object($query);
$query2 = mysqli_query($connect, "select * from comments");
$comments = mysqli_fetch_object($query2);

echo '<h1>', $post->title ,  '</h1>';
echo '<p>', $post->discription ,  '</p>';
echo "<a href='/'>назад</a>";
?>

<h2>Comments</h2>
<?php


    while ($comments = mysqli_fetch_object($query2)) {
        if ($post->id == $comments->post_id) {
//            var_dump($comments);
            echo '<p>', $comments->content, '</p>';

        } else
            echo "There are no comments in this post";
    }
?>
</body>
</html>