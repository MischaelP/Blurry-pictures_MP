<?php 
$host = 'localhost';
$dbname = 'Blurry_Pictures';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    echo "<script>console.log('connexion serveur Ok')</script>";
    
} catch (PDOException $e) {
    echo "Erreur de connexion : ".$e->getMessage();
} 
?>