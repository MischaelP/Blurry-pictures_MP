<?php

function finConnexion (){
    //fin de session + fin de connexion
    session_unset();
    session_destroy();
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Location: ../index.php");
    exit();
}

?>