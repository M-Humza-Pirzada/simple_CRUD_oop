<?php

    $servername = "localhost";
    $username = "root";
    $pass = null;
    $db_name = "oop_crud";

    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $result = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo $result;
?>