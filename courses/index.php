<?php 
session_start();

$_SESSION['user_id'] = 'user';
if(!isset($_SESSION['user_id'])){
    if(strpos($_SERVER['REQUEST_URI'], 'courses') !== false){
        header("Location: ../login.php");
        exit();
    }
}
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
                </div>
            </div>
        </div>

    <?php } ?>
        
    </div>
    
</div>
