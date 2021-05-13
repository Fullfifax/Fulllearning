<?php 
require("includes/constants.php");
require("config/database.php");

$userError = "";
$usernameError = "";
$emailError = "";
$passwordError = "";
$passwordConfirmError = "";
$verifyUserError = "";
    

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        if(isset($_POST['login'])){
            
            extract($_POST);
            $errors = []; // initialisation du tableau qui va contenir l'ensemble des erreurs 

            if(empty($user)){
                $userError = "Teacher or Student";
                $errors[] = $userError;
            }

            if(empty($username)){
                $usernameError = "Username requis";
                $errors[] = $usernameError;
            } else if(mb_strlen($username) < 4){
                $usernameError = "Username trop court (Minimum 4 caractères)";
                $errors[] = $usernameError;
            }      

            if(empty($password)){
                $passwordError = "Mot de passe requis";
                $errors[] = $passwordError;
            } else if(mb_strlen($password) < 8){
                $passwordError = "Mot de passe trop court (Minimum 8 caractères)";
                $errors[] = $passwordError;
            }      


            // Vérifie si le compte existe           
            if(isset($user) && $user == "teacher"){

                $stm = $pdo->query("SELECT id_ens, password FROM enseignant WHERE username ='".$_POST['username']."'");
                $user = $stm->fetch(PDO::FETCH_ASSOC);

                if(password_verify($_POST['password'], $user['password'])){
                    $_SESSION['user_id'] = $user['id_ens'];
                    header('Location: courses/index.php?id='.$user['id_ens']);
                    exit();
                } else {
                    $verifyUserError = "Vérifiez votre username ou mot de passe !";
                    $errors[] = $verifyUserError;
                }

            }
            
            if(isset($user) && $user == "student"){
                    
                $stm = $pdo->query("SELECT id_etu, password FROM etudiant WHERE username ='".$_POST['username']."'");
                $user = $stm->fetch(PDO::FETCH_ASSOC);

                if(password_verify($_POST['password'], $user['password'])){
                    $_SESSION['user_id'] = $user['id_etu'];
                    header("Location: courses/index.php");
                    exit();
                } else {
                    $verifyUserError = "Vérifiez votre username ou mot de passe !";
                    $errors[] = $verifyUserError;
                }  

            }  
   
        }

    }

require_once("views/login.view.php"); 
?>