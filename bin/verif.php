<?php 

if (!empty($_POST['firstName'])&& !empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['pseudo'])&& !empty($_POST['password'])) 
    {
        echo 'Ok <br>';
        echo 'formulaire soumis<br>';
        // est-ce que les var sont initialisées si oui afficher ok
        $firstName= htmlspecialchars($_POST['firstName']);
        $name= htmlspecialchars($_POST['name']);
        $email= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $pseudo= htmlspecialchars($_POST['pseudo']);
        $password= htmlspecialchars($_POST['password']);
        
        // empeche le code de prendre en compte si la psn met des balises html dans les inputs, les met en texte
        if (preg_match('/^[0-9a-zA-Z]{8,}$/', $_POST['password'])) {
            echo 'mdp ok<br>';
        }else{
            echo 'mdp Nok<br>';
        }
            //on verifie que les inputs ont une taille minimale grâce aux regex
        

        $verifFirstName = preg_match('/^[a-zA-Z]{2,}$/', $firstName) ? true : false;
        $verifName = preg_match('/^[a-zA-Z\s]{2,}$/', $name) ? true : false;
        $verifPseudo = preg_match('/^[0-9a-zA-Z]{2,}$/', $pseudo) ? true : false;
        $verifPassword = preg_match('/^[0-9a-zA-Z]{8,}$/', $password) ? true : false;

        if (($verifFirstName && $verifName && $verifPseudo && $verifPassword)==true){
            echo "Tout est Ok <br>";
           
           include "./checkEmail.php";
       
        }else {
            echo "revoir le formulaire";
        }
    }else{
        echo "<a href='../pages/inscription.php'>Remplir tous les champs</a>";
        
    }














    ?>