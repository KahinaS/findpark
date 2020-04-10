<?php
include "head.php";
include_once("BDD/connexiondb.php");
if(!empty($_POST)){
    extract($_POST);
     $valid = (boolean) true;
     if(isset($_POST['inscription'])){
         $pseudo = (String) trim($pseudo);
         $mail = (String) trim($pseudo);
         $password = (String) trim($password);
         $jour = (int) $jour;
         $mois = (int) $mois;
         $annee = (int) $annee;
         $date_naissance = (String) null;
         if(empty($pseudo)){
             $valid = false;
             $err_pseudo = "Veuillez renseigner ce champs !";
         }
         if(empty($mail)){
            $valid = false;
            $err_mail = "Veuillez renseigner ce champs !";
        }
        if(empty($password)){
            $valid = false;
            $err_password = "Veuillez renseigner ce champs !";
        }
        $verif_jour = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
        if(empty($pseudo)){
            $valid = false;
            $err_pseudo = "Veuillez renseigner ce champs !";
        }
         if($valid){

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
                <div class="col-lg-12">
                    <div class="form-heading col-9">
                        <h1 class="prg"><p>Remplir le formulaire</p></h1>
                    </div>
                </div>
            </div>
            <div class='row'>

                <div class="col-lg-6">
                   
                    <div class="form-group">
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
                            <input type="mail" class="form-control" name="mail2" id="email2" required>
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
                            <input type="password" class="form-control" name="password2" id="password"  required>
                        </div>
                    </div>
                    <div>
                    <label for="mail" >Date de naissance:</label>
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
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
                        <option value="1">6</option>
                        <option value="1">7</option>
                        <option value="1">8</option>
                        <option value="1">9</option>
                        <option value="1">10</option>
                        <option value="1">11</option>
                        <option value="1">12</option>
                   </select>
                   <select name="année">
                       <option value="1">année</option>
                        <option value="1">2000</option>
                        <option value="1">1999</option>
                        <option value="1">1998</option>
                        <option value="1">1997</option>
                        <option value="1">1996</option>
                        <option value="1">1995</option>
                        <option value="1">1994</option>
                        <option value="1">1993</option>
                        <option value="1">1992</option>
                        <option value="1">1991</option>
                        <option value="1">1990</option>
                        <option value="1">1989</option>
                        <option value="1">1988</option>
                        <option value="1">1987</option>
                        <option value="1">1986</option>
                        <option value="1">1985</option>
                        <option value="1">1984</option>
                        <option value="1">1983</option>
                        <option value="1">1982</option>
                        <option value="1">1981</option>
                        <option value="1">1980</option>
                        <option value="1">1979</option>
                        <option value="1">1978</option>
                        <option value="1">1977</option>
                        <option value="1">1976</option>
                        <option value="1">1975</option>
                        <option value="1">1974</option>
                        <option value="1">1973</option>
                        <option value="1">1972</option>
                        <option value="1">1971</option>
                        <option value="1">1970</option>
                        <option value="1">1969</option>
                        <option value="1">1968</option>
                        <option value="1">1967</option>
                        <option value="1">1966</option>
                        <option value="1">1965</option>
                        <option value="1">1964</option>
                   </select>
                        <!--</form>-->

                    </div>
                 
                </div>

               </div>

                <div class="col-xs-12">
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
 