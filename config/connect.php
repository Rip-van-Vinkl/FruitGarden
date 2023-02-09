<?php

// в БД 'fruitgarden' одна таблица со столбцами id, kind, fruits

$connect = mysqli_connect( hostname: 'localhost', username: 'root', password: '', database: 'fruitgarden');

if (!$connect) {
    die('Error connect to database');
}

?>