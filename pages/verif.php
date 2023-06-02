<?php 

if (!empty($_POST['firstName'])&& !empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['pseudo'])&& !empty($_POST['password'])
) 
{
    echo 'Ok';
    echo 'formulaire soumis<br>';
    // est-ce que les var sont initialisées si oui afficher ok
    $firstName= filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $name= filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $pseudo= filter_var($_POST['pseudo'],FILTER_SANITIZE_STRING);
    $password= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    // empeche le code de prendre en compte si la psn met des balises html dans les inputs, les met en texte
    if (preg_match('/^[0-9a-zA-Z]{8,}$/', $_POST['password'])) {
        echo 'mdp ok<br>';
    }else{
        echo 'mdp Nok<br>';
    }
        //on verifie que les inputs ont une taille minimale grâce aux regex
    

    $verifFirstName = preg_match('/^[a-zA-Z]{2,}$/', $firstName) ? true : false;
    $verifName = preg_match('/^[a-zA-Z]{2,}$/', $name) ? true : false;
    $verifPseudo = preg_match('/^[0-9a-zA-Z]{2,}$/', $pseudo) ? true : false;
    $verifPassword = preg_match('/^[0-9a-zA-Z]{8,}$/', $password) ? true : false;

    if (($verifFirstName && $verifName && $verifPseudo && $verifPassword)==true){
        echo "Tout est Ok ";

        include "../bin/create_new_user.php";
    }else {
        echo "revoir le formulaire";
    }
}else{
    echo "c'est pas possible frere";
}
















?>