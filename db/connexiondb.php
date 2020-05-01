<?php
include_once("createUserdb.php");
 class connexionDB extends inscriptionDB{
    private $host    ='localhost';
    private $name    ='formulaire';
    private $user    ='root';
    private $pass   = '';
    public $connexion;

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
        //    , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4', PDO::ATTR_ERRMODE)

        }
        catch (PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
   
    public function verifMailPw($mail,$password)
    {
        $req = $this->connexion->prepare("SELECT *
        FROM utilisateurs
        WHERE mail = ? AND password = ?");
        $req->execute(array($mail, crypt($password, '$6$rounds=5000$H4eoaj87enek720ndehbelman82jn83nN310$')));
        $utilisateurs = $req->fetch();
        $_SESSION['pseudo'] = $utilisateurs['pseudo'];
        

        return !isset($utilisateurs['id']);
    }
    public function connexion(){
        return $this->connexion;
        }
}

$DB = new connexionDB();
$BDD = $DB->connexion();

?>