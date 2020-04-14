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
        if(empty($nom)){
            $valid = false;
            $err_nom = "Veuillez renseigner ce champs !";
        }
        if(empty($prenom)){
            $valid = false;
            $err_prenom = "Veuillez renseigner ce champs !";
        }
        if(empty($password)){
            $valid = false;
            $err_password = "Veuillez renseigner ce champs !";
        }
        $verif_jour = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
        if(!in_array($jour, $verif_jour)){
            $valid = false;
            $err_jour = "Veuillez renseigner ce champs !";
        }
        $verif_mois = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        if(!in_array($mois, $verif_mois)){
            $valid = false;
            $err_mois = "Veuillez renseigner ce champs !";
        }
        $verif_annee = array(2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992, 1991, 1990, 1989, 1988, 1987, 1986, 1985, 1984, 1983, 1982, 1981, 1980, 1979, 1978, 1977, 1976, 1975, 1974, 1973, 1972, 1971, 1970, 1969, 1968, 1967, 1966, 1965, 1964);
        if(!in_array($annee, $verif_annee)){
            $valid = false;
            $err_annee = "Veuillez renseigner ce champs !";
        }
      
        $verif_ville = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17);
        // "Montpellier", "Béziers", "Sète", "Agde", "Lunel", "Frontignan", "Castelnau-le-Lez", "Mauguio", "Lattes", "Mèze", "Juvignac", "Le Crès", "Grabels", "Pérols", "Lavérune", "Saint-Jean-de-Védas", "Jacou"
        if(!in_array($ville, $verif_ville)){
            $valid = false;
            $err_ville = "Veuillez renseigner ce champs !";
        
         }
         else{
             $ville_array = array("Montpellier", "Béziers", "Sète", "Agde", "Lunel", "Frontignan", "Castelnau-le-Lez", "Mauguio", "Lattes", "Mèze", "Juvignac", "Le Crès", "Grabels", "Pérols", "Lavérune", "Saint-Jean-de-Védas", "Jacou");
             $tmp = $ville_array[$ville -1];
            
             $ville = $tmp;
         }
        if(!checkdate($jour, $mois, $annee)){
            $valid = false;
            $err_date = "Veuillez renseigner une date correct !";
        }
        else{
            $date_naissance = $annee . '-' . $mois . '-' . $jour;
        }
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                   </select>
                        <select name="mois">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                   </select>
                   <select name="annee">
                       <option value="1">année</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
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
 