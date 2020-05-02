<?php

class UserRepository {
    
    public function inscription($pseudo, $mail, $password, $nom, $prenom, $date_naissance, $date_inscription, $ville, $connexion){
        
        $date_inscription = date("Y-m-d h:m:s"); 
        $password = crypt($password, '$6$rounds=5000$H4eoaj87enek720ndehbelman82jn83nN310$');
        
    
        $req = $connexion->prepare("INSERT INTO utilisateurs (pseudo, mail, password, nom, prenom, date_naissance, date_inscription, ville) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $req->execute(array($pseudo, $mail, $password, $nom, $prenom, $date_naissance, $date_inscription, $ville));
    
    }

    public function isLoginFree($pseudo, $connexion) {
        
        $req = $connexion->prepare("SELECT id
        FROM utilisateurs
        WHERE pseudo = ?");
        $req->execute(array($pseudo));
        $utilisateurs = $req->fetch();

        return !isset($utilisateurs['id']);
    }

    public function isMailFree($mail, $connexion) {
        
        $req = $connexion->prepare("SELECT id
        FROM utilisateurs
        WHERE mail = ?");
        $req->execute(array($mail));
        $utilisateurs = $req->fetch();

        return !isset($utilisateurs['id']);
    }
}

$handler = new UserRepository();

?>