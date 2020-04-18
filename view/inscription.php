<?php
session_start();
include "head.php";

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  </head>
<body>
  <nav class="navbar" href="/">
  <h1 class="navbar ml-2"><a href="../index.php">FindPark<p>Montpellier</a></p> </h1>
  
    <p class="navbar">Inscription</p>  
  </nav>
  
<div class="scrollbar scrollbar-tempting-azure ">
  <div class="force-overflow">
  </div>
</div>
  

   
   

    <form class="form-horizontal" role="form" method='post' action="../control/createUser.php">
        <section class='container'>

            <div class='row'>

                <div class="col-lg-6">
                   
                    <div class="form-group">
                    <?php
                    if(isset($_SESSION["err_pseudo"])){
                    echo $_SESSION["err_pseudo"];
                }
                    ?>
                        <label class="text-light" for="pseudo">Pseudo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control " name="pseudo" value="<?php if(isset($_SESSION["pseudo"])){echo $_SESSION["pseudo"];}?>"required>
                        </div>
                    </div>
                    <div class="form-group">
                    <?php
                    if(isset($err_nom)){
                    echo $err_nom;
                }
                    ?>
                        <label class="text-light" for="nom" >Nom</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nom" id="nom" value="<?php if(isset($nom)){echo $nom;}?>" required> 
                        </div>
                    </div>
                    <div class="form-group">
                    <?php
                    if(isset($err_prenom)){
                    echo $err_prenom;
                }
                    ?>
                        <label class="text-light" for="prenom">Prénom</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prenom" id="prenom" value="<?php if(isset($prenom)){echo $prenom;}?>" required>
                        </div>
                    </div>
                    <div class="form-group">
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
                    if(isset($_SESSION["err_mail"])){
                    echo $_SESSION["err_mail"];
                }
                    ?>
                        <label class="text-light" >Vérifier l'email</label>
                        <div class="col-sm-8">
                            <input type="mail" class="form-control" name="mail" id="email2" required>
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
                    <div class="form-group">
                    <?php
                    if(isset($_SESSION["err_password"])){
                    echo $_SESSION["err_password"];
                }
                    ?>
                        <label class="text-light">Vérifier le mot de passe</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="password"  required>
                        </div>
                    </div>

                    <div>
                    <?php
                    if(isset($err_date)){
                    echo $err_date;
                }
                    ?>
                    <label class="text-light">Date de naissance</label>
                  <select name="jour">
                        <?php for($i = 1; $i <= 31; $i++) {
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                   </select>
                        <select name="mois">
                        <?php for($i = 1; $i <= 12; $i++) {
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                   </select>
                   <select name="annee">
                       <option value="1">année</option>
                       <?php for($i = 1930; $i <= 2002; $i++) {
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                   </select>
                        <!--</form>-->

                    </div>
                 
               <label class="text-light">Choisir la commune</label>
                <select name="ville">
                        <option value="1">Montpellier</option>
                        <option value="2">Béziers</option>
                        <option value="3">Sète</option>
                        <option value="4">Agde</option>
                        <option value="5">Lunel</option>
                        <option value="6">Frontignan</option>
                        <option value="7">Castelnau-le-Lez</option>
                        <option value="8">Maugio</option>
                        <option value="9">Lattes</option>
                        <option value="10">Mèze</option>
                        <option value="11">Juvignac</option>
                        <option value="12">Le Crès</option>
                        <option value="13">Grabels</option>
                        <option value="14">Pérols</option>
                        <option value="15">Lavérune</option>
                        <option value="16">Saint-Jean-de-Védas</option>
                        <option value="17">Jacou</option>
                        </select>
               </div>
</div>
                <div class="btn btn-outline-info">
                <input type="submit" name="inscription" value="S'inscrire">
                </div>
                </section>
    </form>
    
</div>
  
  
  <?php
  include "scriptbootstrap.php";
  ?>
  </body>
  </html>
 