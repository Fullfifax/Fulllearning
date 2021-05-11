<?php 
require("includes/constants.php");
include('includes/functions.php');
include('config/database.php');

$userError = "";
$usernameError = "";
$emailError = "";
$passwordError = "";
$passwordConfirmError = "";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['register'])){
        
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
        } else if(verify_user_teacher($username, 'username', 'enseignant') || verify_user_student($username, 'username', 'etudiant')){ // value_html, nom_champ_bd, nom_table
            $usernameError = "Username déja utilisé !";
            $errors[] = $usernameError;
        } 

        if(empty($email)){
            $emailError = "Adresse email requis";
            $errors[] = $emailError;
        } else if(verify_email_teacher($email, 'email', 'enseignant') || verify_email_teacher($email, 'email', 'etudiant')) {
            $emailError = "Adresse email déja utilisé";
            $error[] = $emailError;
        }

        if(empty($password)){
            $passwordError = "Mot de passe requis";
            $errors[] = $passwordError;
        } else if(mb_strlen($password) < 8){
            $passwordError = "Mot de passe trop court (Minimum 8 caractères)";
            $errors[] = $passwordError;
        } else if($password != $password_confirm){
            $passwordConfirmError = "Les deux mots de passes saisis sont différents !";
            $errors[] = $passwordConfirmError;
        }
        
        
        if(!$errors){ 

            if($user == 'teacher'){
                $sql = "INSERT INTO enseignant (username, email, password) VALUES (?, ?, ?)";
                $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
                $rows = $pdo->prepare($sql)->execute([$_POST['username'], $_POST['email'], $password]);
            } else if($user == 'student'){
                $sql = "INSERT INTO etudiant (username, email, password) VALUES (?, ?, ?)";
                $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
                $rows = $pdo->prepare($sql)->execute([$_POST['username'], $_POST['email'], $password]);
            }   
                             
        } 

    }  

}

require_once("views/register.view.php"); 
?>