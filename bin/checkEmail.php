<?php
    include "../bin/connexion.php";
    echo "début page check Email <br>";


    
    $email=$_POST['email'];
    $checking = $pdo->prepare("SELECT `id`,`email` FROM `users` WHERE `email` = ?");
    $checking->execute([$email]);

    $answer = $checking->fetch(PDO::FETCH_ASSOC);
    
    if($answer){
        $mail = $answer['email'];
        if ($email==$mail){
            
            echo "utilisateur existant";
            echo " <a href='../index.php'>Connectez-vous.</a>";
        }

    }else{
        echo "nouvel utilisateur <br>";
        include "../bin/create_new_user.php";

    }


?>

