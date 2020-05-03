<?php


    if ($_POST) {
        
        unset($_SESSION[$utilisateurs['id']]);
        header("Location: ./index.php");
        session_destroy();
    }



?>
<form method="post">
    <button class="btn btn-outline-primary" name="deconnexion"><a>
        Déconnexion
    </a></button>
</form>

