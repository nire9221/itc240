<?php
    $dsn = 'mysql:host=mysql.erintheworld.com;dbname=myguitarshop_test';
    $username = 'nire9221';
    $password = 'erintheworld1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>