<?php
session_start();
include "head.php";

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

 
 
  <title>Connexion</title>
 
</head>

<body>
  <nav class="navbar" href="/">
  <h1 class="navbar ml-2"><a href="../index.php">FindPark<p>Montpellier</a></p> </h1>
    <p class="navbar">Connexion</p>
   </nav>
  <?php
  include "scriptbootstrap.php";
  ?>
  <section class='container'>

<div class='row'>

    <div class="col-lg-6">
       
    <div class="form-group" >
    <form role="form" method='post' action="../control/connectUser.php">
                   
                    <?php
                    if(isset($_SESSION["err_mail"])){
                    echo $_SESSION["err_mail"];
                }
                    ?>
                        <label class="text-light">Email</label>
                        <div class="col-sm-8">
                            <input type="mail" class="form-control" name="mail" id="email" value="<?php if(isset($nom)){echo $nom;}?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <?php
                    if(isset($_SESSION["err_password"])){
                    echo $_SESSION["err_password"];
                }
                    ?>
                        <label class="text-light">Mot de passe</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
        </div>
        <div class="btn btn-outline-info">
                <input type="submit" name="connexion" value="Se connecter">
                </div>
        </form>
        </div>
       
        </section>
        <?php
          include "scriptbootstrap.php";
        ?>
  </body>
  </html>