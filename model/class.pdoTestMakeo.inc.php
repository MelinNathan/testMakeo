<?php

class pdoTestMakeo
{
    private static $server = 'mysql:host=localhost';
    private static $bdd = 'dbname=testmakeo';
    private static $user = 'root';
    private static $mdp = '';
    private static $myPdo;
    private static $myPdoTestMakeo = null;


    private function __construct()
    {
        pdoTestMakeo::$myPdo = new PDO(pdoTestMakeo::$server . ';' . pdoTestMakeo::$bdd, pdoTestMakeo::$user, pdoTestMakeo::$mdp);
        pdoTestMakeo::$myPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct()
    {
        pdoTestMakeo::$myPdo = null;
    }

    public static function getPdoTestMakeo()
    {
        if (pdoTestMakeo::$myPdoTestMakeo == null) {
            pdoTestMakeo::$myPdoTestMakeo = new pdoTestMakeo();
        }
        return pdoTestMakeo::$myPdoTestMakeo;
    }

    /**
     * Retourne toutes les informations sous forme d'un tableau associatif
     *
     * @return array  tableau associatif des catégories 
     */
    public function getUserData()
    {
        $req = "select * from usermakeo";
        $res = pdoTestMakeo::$myPdo->query($req);
        $someLines = $res->fetchAll();
        return $someLines;
    }


    /**
     * Ajoute une ligne dans la table usermakeo
     *
     * 
     */
    public function newUserData($nomPrenom, $email, $message)
    {

        $req = "INSERT INTO `usermakeo` (`nom_prenom`, `email`, `message`) VALUES (:nomPrenom, :email, :message);";
        $res = pdoTestMakeo::$myPdo->prepare($req);
        $res->bindParam(":nomPrenom", $nomPrenom, PDO::PARAM_STR);
        $res->bindParam(":email", $email, PDO::PARAM_STR);
        $res->bindParam(":message", $message, PDO::PARAM_STR);
        $res->execute();
    }

}


?>