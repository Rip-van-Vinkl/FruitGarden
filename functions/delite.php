<?php

require_once '../config/connect.php';

if (isset($_POST['delite'])) {
    mysqli_query($connect, query: "TRUNCATE `trees` ");
    header('Location: /');
}

?>