<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/connexionCompte.css">
    <title>Connexion</title>
</head>
<body>
   
    <div class="box">
      <div class="form text-gray-500 flex flex-col m-5">
      <img id="logo" src=".\img\logo.png" alt="logo">
    Pseudo <input type="text" name="pseudo" id="pseudo" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="username"> <br>
    Mot de passe <input type="password" name="password" id="password" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="xxxxxxxx"><br>
    <button onclick="window.location.href='./pages/home.php';" class="btn rounded-full border-solid border-2 border-transparent bg-slate-300 m-2">Connexion</button>
    <button onclick="window.location.href='./pages/inscription.php';" class="btn  rounded-full border-solid border-2 border-transparent bg-slate-300 m-2">Créer un compte</button>

      </div>
   </div>

    <?php
    include "./bin/connexion.php";
    ?>

    
</body>
</html>