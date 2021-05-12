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

?>

<div class="container">

    <div class="row mb-2">
        
        <div class="col-md-6">
            
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Cours n°1</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">PHP: Variables</a>
                    </h3>
                    <div class="mb-1 text-muted">12 mey</div>
                        <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="btn btn-dark mt-2">
                            <a href="#" class="p-2 text-light">Continue reading</a>
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="../assets/images/home1.png" alt="Cours1" width="200px">
                </div>
            </div>
            

            <div class="col-md-6">

                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Cours n°1</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">PHP: Variables</a>
                        </h3>
                        <div class="mb-1 text-muted">12 mey</div>
                            <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button class="btn btn-dark mt-2">
                                <a href="#" class="p-2 text-light">Continue reading</a>
                            </button>
                            
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block" src="../assets/images/home1.png" alt="Cours1" width="200px">
                    </div>
                </div>

            </div>

        </div>

    </div>
    
</div>
