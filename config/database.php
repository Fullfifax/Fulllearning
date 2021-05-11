<?php

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);  
} catch(PDOException $e) {
    die("Impossible de se connecter à la base de données. ". $e->getMessage());
}
?>