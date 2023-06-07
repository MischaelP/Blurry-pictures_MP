<?php

include "../bin/connexion.php";

session_start();

$prenom=$_POST['firstName'];
$nom=$_POST['name'];
$email=$_POST['email'];
$pseudo=$_POST['pseudo'];
$mdp=$_POST['password'];
$mdp=md5($mdp);


$_SESSION['name']=$nom;
$_SESSION['firstName']=$prenom;
$_SESSION['email']=$email;
$_SESSION['password']=$mdp;
$_SESSION['pseudo']=$pseudo;

$data = [$nom,$prenom,$email,$mdp,$pseudo];


$newUser = $pdo->prepare("INSERT INTO `testusers`( `name`, `firstName`,`email`, `password`, `pseudo`) VALUES (?,?,?,?,?)");
$ok = $newUser->execute($data);

if(! $ok){
    $errorInfo = $newUser->errorInfo();
   
    echo "L'inscription a échouée : ".$errorInfo[2];
}else{
    echo "Votre inscription est un succès : " . $pseudo."<br>";
    echo " <a href='../index.php'>Connectez-vous.</a><br>";
    header('Location: ../pages/home.php');
                        
}

?>