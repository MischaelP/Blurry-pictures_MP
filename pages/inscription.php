<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>

    
   
       <div class="box"> 
        
            <div class="formulaire">
            <img id="logo" src="..\img\logo.png" alt="logo">
        <form action="verif.php" method="POST" class="form text-gray-500 flex flex-col m-5">

            Prénom <input type="text" name="firstName" id="firstName" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="firstname">
            Nom <input type="text" name="name" id="name" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="name">
            Email <input type="email" name="email" id="email" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="blabla@gmail.com">
            Pseudo  <input type="text" name="pseudo" id="pseudo" class="input border-solid border-2 border-stone-400 rounded pl-2" placeholder="pseudo">
            Mot de passe <input type="password" name="password" id="input password" class="border-solid border-2 border-stone-400 rounded pl-2" placeholder="xxxxxxxxx">
           <button type="submit" value="Création" class="button rounded-full border-solid border-2 border-transparent bg-slate-300 m-2 rounded"> Création </button>

        </form>
            </div>
      </div>
    
  
    
</body>
</html>