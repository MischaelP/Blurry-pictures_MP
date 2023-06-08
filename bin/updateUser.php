<?php 
include "../bin/connexion.php";
session_start();

echo "<br> echo ".$_SESSION['id'];
echo "<br> echo ".$_SESSION['firstName'];
echo "<br> echo ".$_SESSION['name'];
echo "<br> echo ".$_SESSION['email'];
echo "<br> echo ".$_SESSION['pseudo'];
echo "<br> echo ".$_SESSION['password'];



$updateUser = [
    'firstName'=> htmlspecialchars($_POST['firstName']),
    'name'=> htmlspecialchars($_POST['name']),
    'email'=> filter_var($_POST['email'],FILTER_SANITIZE_EMAIL),
    'pseudo'=> htmlspecialchars($_POST['pseudo']),
    'password'=> htmlspecialchars($_POST['password']),
];


    
$firstName= !empty($updateUser['firstName'])? $_SESSION['firstName']=$updateUser['firstName']:$_SESSION['firstName'];
$name= !empty($updateUser['name'])? $_SESSION['name']=$updateUser['name']:$_SESSION['name'];
$email= !empty($updateUser['email'])? $_SESSION['email']=$updateUser['email']:$_SESSION['email'];
$pseudo= !empty($updateUser['pseudo'])? $_SESSION['pseudo']=$updateUser['pseudo']:$_SESSION['pseudo'];
$password= !empty($updateUser['password'])? $_SESSION['password']=md5($updateUser['password']):$_SESSION['password'];



$idUser= $_SESSION['id'];

$update = $pdo->prepare("UPDATE `users` SET `name`= :name,`firstName`= :firstName,`email`= :email,`password`= :password,`pseudo`= :pseudo WHERE `id`=$idUser");
$update->bindValue(':name', $name);
$update->bindValue(':firstName', $firstName);
$update->bindValue(':email', $email);
$update->bindValue(':password', $password);
$update->bindValue(':pseudo', $pseudo);

$update->execute();

header('Location: ../pages/home.php');


?>
