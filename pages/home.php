<?php 
include "../bin/connexion.php";
session_start();
// echo $_SESSION["name"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/design.css">
    <title>Home Page</title>
</head>
<body>
    <main>
        <header>

            <nav class="navBarre">
            <ul class="flex flex-col m-5">
              <li><a><?php echo $_SESSION['pseudo'] ?> </a></li>
                <br>
                <li><a href="../index.php">Log out</a></li>

            </ul>
            </nav>
        </header>
            <div class="wrapper">
                <div class="lat_menu">
                    <img src="../img/logo.png" alt="" srcset="" id="logo">

                    <div id="pseudoLatBar"> <img src="../img/id-card.png">
                    <br><p><?php echo $_SESSION['pseudo'] ?></p></div>
                    <div id="homeLatBar"><img src="../img/home.png">
                    <br><p>Home</p> </div>
                    <div id="settingsLatBar"><img src="../img/settings.png">
                    <br><p><a href="./profil.php">Settings</a></p> </div>


                </div>
                <div class="head_post">
                    <div class="create_post">
                        <form>
                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-50 dark:border-gray-600">
                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-50">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-50 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                                </div>
                                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                        Post comment
                                    </button>
                                    <div class="flex pl-0 space-x-1 sm:pl-2">
                                        <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Attach file</span>
                                        </button>
                                        <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Set location</span>
                                        </button>
                                        <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Upload image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
                <div class="feed">
                    
                    <div class="post">
                        <h3> Jax Martin</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum reprehenderit laboriosam eligendi adipisci pariatur nemo.</p>
                        <img src="../img/rue_floue.jpeg" alt="rue floue" srcset="">
                        <p>Affichage date</p>
                    </div>
                   
                    <div class="post">
                        <h3> Jax Martin</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum reprehenderit laboriosam eligendi adipisci pariatur nemo.</p>
                        <img src="../img/rue_floue.jpeg" alt="rue floue" srcset="">
                        <p>Affichage date</p>
                    </div>

                    <div class="post">
                        <h3> Jax Martin</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum reprehenderit laboriosam eligendi adipisci pariatur nemo.</p>
                        <img src="../img/rue_floue.jpeg" alt="rue floue" srcset="">
                        <p>Affichage date</p>
                    </div>
                </div>
                <div class="footer">Footer</div>
            </div>

    </main>
</body>
</html>