<?php

session_start();

include("../filters/teacher_filter.php");

require_once("../includes/constants.php");
require_once("../config/database.php");

if($_GET){
    $rows = $pdo->exec("DELETE FROM cours WHERE id=".$_GET['id']);

    if($rows > 0){
        header("Location: index.php");
    } else {
        echo "ERROR !";
    }
}

?>