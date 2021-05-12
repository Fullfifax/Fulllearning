<?php
session_start();
$_SESSION['user_id'] = 'user';

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

    <div class="container">

        <h1><?= $row['information']; ?></h1>  

        <video width="320" height="240" controls>
            <source src="../uploads/" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

</main>
