<?php

class connexionDB {
    private $host ='localhost';
    private $name ='formulaire';
    private $user ='root';
    private $pass = '';
    private $connexion;

    function __construct($host = null, $name = null, $user = null, $pass = null){
        if($host != null){
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->pass = $pass;
        }
        try{
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
            $this->user, $this->pass);

        }
        catch (PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
   
   
   

    public function connexion() {
        return $this->connexion;
    }
}

$DB = new connexionDB();
$BDD = $DB->connexion();

?>