<?php
    // On vérifie que tous les champs sont remplis
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {
        // On nettoie les données envoyées
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
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