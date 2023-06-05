<?php
    include "../bin/connexion.php";
    echo "début page check Email <br>";


    // $email = 'Steve@BG.com';
    $email=$_POST['email'];
    $checking = $pdo->prepare("SELECT `id`,`email` FROM `testusers` WHERE `email` = ?");
    $checking->execute([$email]);

    $row = $checking->fetch(PDO::FETCH_ASSOC);
    
    if($row){
        $mail = $row['email'];
        if ($email==$mail){
            echo "utilisateur existant";
            echo " <a href='../index.php'>Connectez-vous.</a>";
        }

    }else{
        echo "nouvel utilisateur";
        include "../bin/create_new_user.php";

    }
    

    // while ($row = $checking->fetch(PDO::FETCH_ASSOC)) {
    //     $lengthArray = !empty($row)?true:false;
    //     if ($lengthArray===true){
    //         // header('Location: ../index.php');
        
    //         print "utilisateur existant!!!! <br>";
    //         header('Location: ../index.php');
    //         print "utilisateur existant!!!! <br>";
    //         // exit();

    //     }
    // echo "longueur tableau = ".$lengthArray."<br>";
    // echo $lengthArray;
    // echo $row['id']." -> ".$row['email']."<br>";
    // }
    echo "fin page check Email <br>";


?>

