<?php 
include "../bin/connexion.php";

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
// $password = md5($password);

echo "le pseudo avant la requette est =".$pseudo."<br>";

$checking = $pdo->prepare("SELECT * FROM `testusers` WHERE `pseudo` = ?");
$checking->execute([$pseudo]);

$answer = $checking->fetch(PDO::FETCH_ASSOC);

echo "Le pseudo réponse = ".$answer['pseudo']."<br>";

if($answer){
    $pseudoUser = $answer['pseudo'];
    $passwordUser = $answer['password'];
    if ($pseudo==$pseudoUser && $password==$passwordUser){

        header('Location: ../pages/home.php');

    }else{

    
    echo "<script>console.log('erreur de mdp')</script>";
    echo "Erreur de mot de passe <br>";
    echo "<button><a href='../index.php'>Connexion</a></button>";
    // header('Location: ../index.php');

}}





?>
