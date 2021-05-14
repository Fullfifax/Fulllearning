<?php 
session_start();

include("../filters/teacher_filter.php");

require("../includes/constants.php");
require_once('../config/database.php');
require_once("../includes/_header.php"); 
require_once("../includes/_nav.php");

$stm = $pdo->query("SELECT id, nom, fichier, information FROM cours");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

    <div class="row mb-2">

    <?php foreach($rows as $row){ ?>

        <div class="col-sm-6 mb-4">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['nom']; ?></h5>
                    <p class="card-text"><?= $row['information']; ?></p>
                    <a href="show.php?id=<?=$row['id'];?>" class="btn btn-light text-dark">Show more</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger text-light ml-4">Delete</a>
                </div>
            </div>
        </div>

    <?php } ?>
        
    </div>
    
</div>
