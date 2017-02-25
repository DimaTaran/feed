<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 25.02.17
 * Time: 13:32
 */
ini_set('display_errors', 1);
$connect = mysqli_connect('localhost', 'root', '');
if(!$connect){
    die('Error connect:' . mysqli_connect_error($connect));
}
mysqli_select_db($connect, 'feed');
$query = mysqli_query($connect, "select * from post WHERE id in (1,4)");
//$row = mysqli_fetch_assoc($query);
//echo $row['id'], $row['title'];

while ($posts = mysqli_fetch_object($query))
//$row2 = mysqli_fetch_object($query);
//echo $row2->id;
{echo '<pre>';
    var_dump($posts);
    echo '<pre>';}
