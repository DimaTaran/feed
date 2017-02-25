<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 25.02.17
 * Time: 15:31
 */
ini_set('display_errors', 1);
$connect = mysqli_connect('localhost', 'root', '');
if(!$connect){
    die('Error connect:' . mysqli_connect_error($connect));
}
mysqli_select_db($connect, 'feed');