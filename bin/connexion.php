<?php 
$host = 'localhost';
$dbname = 'Blurry_Pictures';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    echo '<br class="text-blue-600"> Connexion serveur Ok<br>';
    
} catch (PDOException $e) {
    echo "Erreur de connexion : ".$e->getMessage();
} 
?>