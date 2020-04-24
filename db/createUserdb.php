<?php

class inscriptionDB{
    public function isLoginFree($pseudo)
    {
        $req = $this->connexion->prepare("SELECT id
        FROM utilisateurs
        WHERE pseudo = ?");
        $req->execute(array($pseudo));
        $utilisateurs = $req->fetch();

        return !isset($utilisateurs['id']);
    }
    

    public function isMailFree($mail)
    {
        $req = $this->connexion->prepare("SELECT id
        FROM utilisateurs
        WHERE mail = ?");
        $req->execute(array($mail));
        $utilisateurs = $req->fetch();

        return !isset($utilisateurs['id']);
    }
    public function connexion(){
        return $this->connexion;
    }
}
    
    ?>