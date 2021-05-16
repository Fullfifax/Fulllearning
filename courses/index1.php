<?php 
session_start();

include("../filters/student_filter.php");

require("../includes/constants.php");
require_once('../config/database.php');
require_once("../includes/_header.php"); 
require_once("../includes/_nav1.php");

$stm = $pdo->query("SELECT id, nom, fichier, information FROM cours");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

    <div class="row mb-2">

    <?php foreach($rows as $row){ ?>

        <div class="col-sm-6 mb-4">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $row['nom']; ?></h5>
                    <p class="card-text text-justify"><?php echo substr($row['information'], 0, 150)."..."; ?></p>
                    <a href="show1.php?id=<?=$row['id'];?>" class="btn btn-light text-dark">Watch video</a>
                </div>
            </div>
        </div>

    <?php } ?>
        
    </div>
    
</div>
