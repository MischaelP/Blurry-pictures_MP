<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">Hello world</h1>
    <p class="text-green-600">Ceci est un texte rouge</p>
    Pseudo <input type="text" name="pseudo" id="pseudo" class="border-solid border-2 border-neutral-900">
    MDP <input type="password" name="password" id="password" class="border-solid border-2 border-neutral-900"><br>
    <button onclick="window.location.href='./pages/inscription.php';" class="border-solid border-2 border-neutral-900 bg-slate-300">
      Click Here
    </button>
    

    <?php
    include "./bin/connexion.php";
    ?>

    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>