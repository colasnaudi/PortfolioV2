<?php
    // On vérifie que tous les champs sont remplis
    if (!empty($_POST['Name']) && !empty($_POST['Mail']) && !empty($_POST['Subject']) && !empty($_POST['Message'])) {
        // On nettoie les données envoyées
        $nom = $_POST['Name'];
        $email = $_POST['Mail'];
        $sujet = $_POST['Subject'];
        $message = $_POST['Message'];
        // On envoie l'email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            mail('colasnaudi@gmail.com', $nom . " : " . $sujet, $message, 'From: ' . $email);
            header('Location: ../index.php?success=1');
        }
        else{
            header('Location: ../index.php?error=2');
        }
    }
    else {
        header('Location: ../index.php?error=1');
    }