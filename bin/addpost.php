<?php
include "../bin/connexion.php";
session_start();

//récupération des infos du formulaire
$formatImage = array("jpg","jpeg","png","gif");
$post = htmlspecialchars($_POST['newPost']);
$id = $_SESSION['id'];
$pseudo = $_SESSION['pseudo'];
$content = $_POST['newPost'];
echo $id, $pseudo;

//vérification de l'image
if (isset($_FILES['post_img']) && $_FILES['post_img']['error'] == 0){

    //vérification taille de l'image
        if($_FILES['post_img']['size'] <= 4000000){
            $informationImage = pathinfo($_FILES['post_img']['name']);
            $extensionImage = $informationImage['extension'];
            //upload de l'image
            if(in_array($extensionImage,$formatImage)){
                $nomImg = $pseudo."_".time().rand().".".$extensionImage;
                $pathImg = '../img/uploaded/'.$nomImg;
                move_uploaded_file($_FILES['post_img']['tmp_name'],$pathImg);

                echo '<p>Upload Succesfull</p>';
                echo '<p>Nom chemin :</p>'.$pathImg;
                echo '<img src=" '.$pathImg.'">';
               
                
               
                $data = [$id,$content,$pathImg]; 
                //Creation du post et vérification
                $newpost = $pdo->prepare("INSERT INTO `posts`(`user_id`, `content`, `lien_img`) VALUES (?,?,?)");
                try {
                    $newpost->execute($data);
                    header('Location: ../pages/home.php');
                
                    // Requête exécutée avec succès
                } catch (PDOException $e) {
                    // Erreur lors de l'exécution de la requête
                    echo "Something bad happend, Harry " . $e->getMessage();
                }


            }

        }
        else{
            echo '<script>alert("Fichier trop lourd");</script>';
    
        }
        
}


?>