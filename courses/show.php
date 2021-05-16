<?php
session_start();

include("../filters/teacher_filter.php");

$title = "Show course";

require_once('../includes/constants.php');
require_once('../config/database.php');
require_once('../includes/_header.php');
require_once('../includes/_nav.php');

if($_GET){
    
    $stm = $pdo->prepare("SELECT * FROM cours WHERE id = ?");
    $stm->bindValue(1, $_GET['id']);
    $stm->execute();

    $row = $stm->fetch(PDO::FETCH_ASSOC);
}

?>

<main role="main">

    <div class="container bg-dark p-4">

        <h2 class="text-light p-3 mt-3 text-center"><?= $row['nom']; ?></h2>
        
        <div class="d-flex justify-content-center">
            
            <video width="380" height="240" controls class="p-3">
                <source src="../uploads/<?= $row['fichier']; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <p class="text-light p-4 text-justify">
                <?= $row['information']; ?> <br><br>
                <a href="index.php?id=<?=$_SESSION['user_id']; ?>" class="text-light font-italic"><-- Return :)</a>
            </p>


        </div>

        
        

        
        

    </div>

</main>


