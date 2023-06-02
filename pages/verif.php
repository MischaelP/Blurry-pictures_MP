<?php 

if (isset($_POST['firstName'], $_POST['name'], $_POST['email'], $_POST['pseudo'], $_POST['password'])) {
    echo 'ok';
    // est-ce que les var sont initialisées si oui afficher ok
    $firstName= filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $name= filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $pseudo= filter_var($_POST['pseudo'],FILTER_SANITIZE_STRING);
    $password= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    //empeche le code de prendre en compte si la psn met des balises html dans les inputs, les met en texte
    if (preg_match('/^[0-9a-zA-Z]{8,}$/', $_POST['password'])) {
        echo 'mdp ok';
    }
        //on verifie que les inputs ont une taille minimale grâce aux regex
    echo (preg_match('/^[a-zA-Z]{2,}$/', $firstName)) ? "Valide" : "Non valide";
    echo (preg_match('/^[a-zA-Z]{2,}$/', $name)) ? "Valide" : "Non valide";
    echo (preg_match('/^[a-zA-Z]{2,}$/', $pseudo)) ? "Valide" : "Non valide";
    
}
















?>