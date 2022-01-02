<?php
    try {
        $connection = new PDO("mysql:host=localhost;dbname=loginlogout", "root", "123456");
    } catch (Exception $e) {
        echo "ERROR", $e;
    }
?>