<?php 
include "../bin/connexion.php";
include "../index.php";

session_start();

$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);
$password = md5($password);

// echo "le pseudo avant la requette est =".$pseudo."<br>";

$checking = $pdo->prepare("SELECT * FROM `testusers` WHERE `pseudo` = ?");
$checking->execute([$pseudo]);

foreach($checking as $answer){
    $idUser = $answer['id'];
    $nameUser = $answer['name'];
    $firstNameUser = $answer['firstName'];
    $emailUser = $answer['email'];
    $pseudoUser = $answer['pseudo'];
    $passwordUser = $answer['password'];
}
$_SESSION["id"]=$idUser;
$_SESSION["name"]=$nameUser;
$_SESSION["firstName"]=$firstNameUser;
$_SESSION["email"]=$emailUser;
$_SESSION["password"]=$passwordUser;
$_SESSION["pseudo"]=$pseudoUser;

 if ($pseudo==$pseudoUser && $password==$passwordUser){

        header('Location: ../pages/home.php');
        exit();

    }else{

    
    echo "<script>console.log('erreur de mdp')</script>";
    // echo "Erreur de mot de passe <br>";
    // echo "<button><a href='../index.php'>Connexion</a></button>";
    // header('Location: ../index.php');

}






?>
