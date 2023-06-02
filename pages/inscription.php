<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création profil</title>
</head>
<body>
    <div class="max-w-xl">
        <form action="../bin/create_new_user.php" method="POST" class="text-red-600 flex flex-col m-5">
            Prénom <input type="text" name="firstName" id="firstName" class="border-solid border-2 border-neutral-900">
            Nom <input type="text" name="name" id="name" class="border-solid border-2 border-neutral-900">
            Email <input type="email" name="email" id="email" class="border-solid border-2 border-neutral-900">
            Pseudo  <input type="text" name="pseudo" id="pseudo" class="border-solid border-2 border-neutral-900">
            Mot de passe <input type="password" name="password" id="password" class="border-solid border-2 border-neutral-900">
            <input type="submit" value="Création" class="border-solid border-2 border-neutral-900 bg-slate-300 m-2
            ">
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    

    
</body>
</html>