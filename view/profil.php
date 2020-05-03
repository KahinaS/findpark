<?php 
session_start();
include_once("../db/connexiondb.php");
include_once("../db/UserRepository.php");

if (isset($_SESSION['pseudo'])&& isset($_SESSION['mail'])&& isset($_SESSION['prenom'])&& isset($_SESSION['nom'])&& isset($_SESSION['ville'])&& isset($_SESSION['date_naissance'])){
    echo "<p> Bienvenue sur votre profil</p>";
    echo  "<p class='mr-3'>".$_SESSION['pseudo']."</p>";
    echo  "<p class='mr-3'>".$_SESSION['mail']."</p>";
    echo  "<p class='mr-3'>".$_SESSION['prenom']."</p>";
    echo  "<p class='mr-3'>".$_SESSION['nom']."</p>";
    echo  "<p class='mr-3'>".$_SESSION['ville']."</p>";
    echo  "<p class='mr-3'>".$_SESSION['date_naissance']."</p>";
}
else{
    echo "Vous devez vous connecter pour voir cette page !";
} 

?>