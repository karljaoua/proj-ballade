<?php
require_once("balade.php");

class Database{
    // Attributs
    private $connexion;

    // Le constructeur
    public function __construct(){
        $PARAM_hote = "mariadb";
        $PARAM_port = "3306";
        $PARAM_nom_bd = "Promenades";
        $PARAM_utilisateur = "adminBalades";
        $PARAM_mot_passe = "BAladesbalades";

        try{
            // Le code qu'on essaye de faire
            $this->connexion = new PDO('mysql:dbname='.$PARAM_nom_bd.';host='.$PARAM_hote,
                                $PARAM_utilisateur,
                                $PARAM_mot_passe);
        }catch(Exception $monException){
            echo "Erreur : ".$monException->getMessage()."<br/>";
            echo "Code : ".$monException->getCode();
        }

    }
    public function getDBName(){
        return $this->connexion->query('select database()')->fetchColumn();
    }
    public function getConnexion(){
        return $this->connexion;
    }  
    public function getAllBalade(){
        $pdo = $this->connexion->prepare(
            "SELECT * FROM Balade"
        );
        $pdo->execute();
         
        $balades = $pdo->fetchAll(PDO::FETCH_CLASS, "Balade");
        return $balades;
    }

}
?>  