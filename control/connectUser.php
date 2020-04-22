<?php
session_start();
$_SESSION = array();
include_once("../db/connexiondb.php");
include_once("Constante.php");
if(!empty($_POST)){
    extract($_POST);
     $valid = (boolean) true;
     if(isset($_POST['connexion'])){
         $mail = (String) trim($mail);
         $password = (String) trim($password);
         if(empty($mail)){
            $valid = false;
            $err_mail = "Veuillez renseigner ce champs !";
        }else{
            if(!$DB->verifMail($mail)){
                $valid = false;
               $_SESSION["err_mail"] = Constant::$emailTaken;
            }      
            
        }
        if(empty($password)){
            $valid = false;
            $err_password = "Veuillez renseigner ce champs !";
        }
       if($valid){
           header("Location:../index.php");
           exit;
       }
     }
    }
 ?>