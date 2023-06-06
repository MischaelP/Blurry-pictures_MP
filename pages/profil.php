<?php 
include "../bin/connexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/inscription.css">
    <title>Mise à jour profil</title>
</head>
<body>

    
   
       <div class="box"> 
        
            <div class="formulaire">
            <img id="logo" src="..\img\logo.png" alt="logo" class="text-gray-500 flex flex-col m-5">
        <form action="../bin/updateUser.php" method="POST" class="form text-gray-500 flex flex-col m-5">

            Prénom : <input type="text" name="firstName" id="firstName" class="input border-solid border-2 border-stone-400 rounded pl-2 placeholder-orange-600" placeholder="<?php echo $_SESSION["firstName"]?>">
            Nom :<input type="text" name="name" id="name" class="input border-solid border-2 border-stone-400 rounded pl-2 placeholder-orange-600" placeholder="<?php echo $_SESSION["name"]?>">
            Email :<input type="email" name="email" id="email" class="input border-solid border-2 border-stone-400 rounded pl-2 placeholder-orange-600" placeholder="<?php echo $_SESSION["email"]?>">
            Pseudo :<input type="text" name="pseudo" id="pseudo" class="input border-solid border-2 border-stone-400 rounded pl-2 placeholder-orange-600" placeholder="<?php echo $_SESSION["pseudo"]?>">
            Mot de passe :<input type="password" name="password" id="input password" class="border-solid border-2 border-stone-400 rounded pl-2 placeholder-orange-600" placeholder="xxxxxxxxx">
           <button type="submit" value="Mise à jour" class="button border-solid border-2 border-transparent bg-slate-300 m-2 placeholder-orange-600"> Mise à jour </button>

        </form>
            </div>
      </div>
    
  
    
</body>
</html>