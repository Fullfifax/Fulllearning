<?php

if(!isset($_SESSION['user_id']) && !isset($_SESSION['password'])){
    header('Location: ../login.php');
    exit();
} 

?>