<?php

    // Vérifie si username saisi existe dans la table $table
    
    function verify_user_teacher($value, $field, $table){
        
        global $pdo;

        $requete = $pdo->prepare("SELECT id_ens FROM $table WHERE $field = ?");
        $requete->execute([$value]);

        $count = $requete->rowCount();

        $requete->closeCursor();

        return $count;
    }

    function verify_email_teacher($value, $field, $table){
        
        global $pdo;

        $requete = $pdo->prepare("SELECT email FROM $table WHERE $field = ?");
        $requete->execute([$value]);

        $count = $requete->rowCount();

        $requete->closeCursor();

        return $count;
    }
    

    // Vérifie si l'adresse email saisi existe

    function verify_user_student($value, $field, $table){
        
        global $pdo;

        $requete = $pdo->prepare("SELECT id_etu FROM $table WHERE $field = ?");
        $requete->execute([$value]);

        $count = $requete->rowCount();

        $requete->closeCursor();

        return $count;
    }

    function verify_email_student($value, $field, $table){
        
        global $pdo;

        $requete = $pdo->prepare("SELECT email FROM $table WHERE $field = ?");
        $requete->execute([$value]);

        $count = $requete->rowCount();

        $requete->closeCursor();

        return $count;
    }

?>