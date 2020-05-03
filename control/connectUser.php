<?php
session_start();
$_SESSION = array();
include_once("../db/connexiondb.php");
include_once("../db/UserRepository.php");
include_once("Constante.php");
if(!empty($_POST)){
    extract($_POST);
     $valid = (boolean) true;
     if(isset($_POST['connexion'])){
         $mail = (String) trim($mail);
         $password = (String) trim($password);
        
         if(empty($mail)){
            $valid = false;
            $err_mail = Constant::$invalid;
            if(empty($password)){
                $valid = false;
                $err_password = Constant::$invalid ;
            }
               
            
        }else{
            if($handler->isMailFree($mail, $BDD)){
                $valid = false;
               $_SESSION["err_mail"] = Constant::$emailExist;
               header("Location: ../view/connexion.php");
            } 
           
           else if($handler->verifMailPw($mail, $password,$BDD)){
                $valid = false;
               $_SESSION["err_mail"] = Constant::$emailInvalid;
               
               $_SESSION["err_password"] = Constant::$pwInvalid;
                header("Location: ../view/connexion.php");
            }      
            
        }
      
       if($valid){
       
          

           header("Location:../index.php");
        
       }
     }
    }
 ?>