<?php

include "../bin/connexion.php";

$prenom=$_POST['firstName'];
$nom=$_POST['name'];
$email=$_POST['email'];
$pseudo=$_POST['pseudo'];
$mdp=$_POST['password'];


$data = [$nom,$prenom,$email,$mdp,$pseudo];


echo "test $prenom";

$newUser = $pdo->prepare("INSERT INTO `testusers`( `name`, `firstName`,`email`, `password`, `pseudo`) VALUES (?,?,?,?,?)");
$newUser->execute($data);

echo "<br> test $nom";


?>