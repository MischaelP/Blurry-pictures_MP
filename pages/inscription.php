<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="max-w-xl">
       <h1 class="title text-gray-900">Inscription</h1>

        <form action="verif.php" method="POST" class="text-gray-500 flex flex-col m-5">

            Prénom <input type="text" name="firstName" id="firstName" class="border-solid border-2 border-neutral-900 rounded pl-2" placeholder="firstname">
            Nom <input type="text" name="name" id="name" class="border-solid border-2 border-neutral-900 rounded pl-2" placeholder="name">
            Email <input type="email" name="email" id="email" class="border-solid border-2 border-neutral-900 rounded pl-2" placeholder="blabla@gmail.com">
            Pseudo  <input type="text" name="pseudo" id="pseudo" class="border-solid border-2 border-neutral-900 rounded pl-2" placeholder="pseudo">
            Mot de passe <input type="password" name="password" id="password" class="border-solid border-2 border-neutral-900 rounded pl-2" placeholder="xxxxxxxxx">
            <input type="submit" value="Création" class="border-solid border-2 border-neutral-900 bg-slate-300 m-2 rounded">
        </form>
    </div>
    
    
</body>
</html>