<?php

if(!isset($_SESSION['user_id1']) && !isset($_SESSION['password'])){
    header('Location: ../login.php');
    exit();
} 

?>