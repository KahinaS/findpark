<?php
include "head.php";
include_once("db/connexiondb.php");
if(!empty($_POST)){
    extract($_POST);
     $valid = (boolean) true;
     if(isset($_POST['inscription'])){
         $pseudo = (String) trim($pseudo);
         $mail = (String) trim($mail);
         $nom = (String) trim($nom);
         $prenom = (String) trim($prenom);
         $password = (String) trim($password);
         $jour = (int) $jour;
         $mois = (int) $mois;
         $annee = (int) $_POST['annee'];
         $date_naissance = (String) null;
         $ville = (int) $ville;
    var_dump($valid);
         if(empty($pseudo)){
             $valid = false;
             $err_pseudo = "Veuillez renseigner ce champs !";
         }else{
             $req = $BDD->prepare("SELECT id
             FROM utilisateurs
             WHERE pseudo = ?");
             $req->execute(array($pseudo));
             $utilisateurs = $req->fetch();
             if(isset($utilisateurs['id'])){
                 $valid = false;
                 $err_mail = "Ce pseudo existe déjà !";
             }
         }
         var_dump($valid);
         if(empty($mail)){
            $valid = false;
            $err_mail = "Veuillez renseigner ce champs !";
        }else{
            $req = $BDD->prepare("SELECT id
            FROM utilisateurs
            WHERE mail = ?");
            $req->execute(array($mail));
            $utilisateurs = $req->fetch();
            if(isset($utilisateurs['id'])){
                $valid = false;
                $err_pseudo = "Ce mail existe déjà !";
            }
        }
        var_dump($valid);
        if(empty($nom)){
            $valid = false;
            $err_nom = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if(empty($prenom)){
            $valid = false;
            $err_prenom = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if(empty($password)){
            $valid = false;
            $err_password = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if($jour < 1 || $jour > 31) {
            $valid = false;
            $err_jour = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if($mois < 1 || $mois > 12) {
            $valid = false;
            $err_mois = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if($annee < 1930 || $annee > 2002) {
            $valid = false;
            $err_annee = "Veuillez renseigner ce champs !";
        }
      
        $verif_ville = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17);
        // "Montpellier", "Béziers", "Sète", "Agde", "Lunel", "Frontignan", "Castelnau-le-Lez", "Mauguio", "Lattes", "Mèze", "Juvignac", "Le Crès", "Grabels", "Pérols", "Lavérune", "Saint-Jean-de-Védas", "Jacou"
        var_dump($valid);
        if(!in_array($ville, $verif_ville)){
            $valid = false;
            $err_ville = "Veuillez renseigner ce champs !";
        
         }
         else{
             $ville_array = array("Montpellier", "Béziers", "Sète", "Agde", "Lunel", "Frontignan", "Castelnau-le-Lez", "Mauguio", "Lattes", "Mèze", "Juvignac", "Le Crès", "Grabels", "Pérols", "Lavérune", "Saint-Jean-de-Védas", "Jacou");
             $tmp = $ville_array[$ville -1];
            
             $ville = $tmp;
         }
         var_dump($valid);
        if(false){
            //?correction !checkdate
            $valid = false;
            $err_date = "Veuillez renseigner une date correct !";
        }
        else{
            $date_naissance = $annee . '-' . $mois . '-' . $jour;
        }
        var_dump($valid);
         if($valid){
           $date_inscription = date("Y-m-d"); $password = crypt($password, '$6$rounds=5000$H4eoaj87enek720ndehbelman82jn83nN310$');
          
           $req = $BDD->prepare("INSERT INTO utilisateurs (pseudo, mail, password, nom, prenom, date_naissance, date_inscription, ville) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
           $req->execute(array($pseudo, $mail, $password, $nom, $prenom, $date_naissance, $date_inscription, $ville));
         }
     }
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  </head>
<body>
  <nav class="navbar" href="/">
    <h1 class="navbar ml-2">FindPark <p>Montpellier</p></h2>
    <p class="navbar">Inscription</p>  
  </nav>
  
<div class="scrollbar scrollbar-tempting-azure ">
  <div class="force-overflow">
  </div>
</div>
  

   
   

    <form class="form-horizontal" role="form" method='post'>
        <section class='container'>

            <div class='row'>

                <div class="col-lg-6">
                   
                    <div class="form-group">
                    <?php
                    if(isset($err_pseudo)){
                    echo $err_pseudo;
                }
                    ?>
                        <label for="pseudo">Pseudo:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pseudo" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom" >Nom:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nom" id="nom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Email:</label>
                        <div class="col-sm-8">
                            <input type="mail" class="form-control" name="mail" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                   
                        <label >Vérifier l'email:</label>
                        <div class="col-sm-8">
                            <input type="mail" class="form-control" name="mail" id="email2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Vérifier le mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="password"  required>
                        </div>
                    </div>

                    <div>
                    <label >Date de naissance:</label>
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
                 
               <label>Choisir la commune</label>
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
 