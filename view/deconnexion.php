<?php


    if ($_POST) {
        
        unset($_SESSION[$utilisateurs['id']]);
        header("Location: ../index.php");

    }



?>
<form method="post">
    <button name="deconnexion">
        Déconnexion
    </button>
</form>

