<?php
    //MySQL Database credentials

    define('USER', 'hunterguynn');
    define('PASSWORD', '6JenGqhmG7VmwUGh');
    define('HOST', 'localhost');
    define('DATABASE', 'sleakfitness');

//Attempt to connect to MySQL database

try{
    $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>