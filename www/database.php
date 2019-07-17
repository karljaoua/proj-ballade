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
            $this->connexion = new PDO('mysql:dbname='.$PARAM_nom_bd.';host='.$PARAM_hote.';charset=UTF8',
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
        public function listUnebalade($unebalade) {


            //Ici il est super important que les nom des Colonnes de la requête soient exactement les mêmes que les attributs
            //de la classe Chiens

            $listrequest  = "SELECT B.id, B.titre,B.pseudo, B.type, B.codepostal, B.ville, B.pays, B.lieudepart, B.lieuarrivee, ";
            $listrequest .= "B.description, B.etapes, B.photo FROM Balade B  WHERE B.id = :numbalade ";
            
           

            $pdostatement = $this->connexion->prepare($listrequest);

            
            $pdostatement->execute(['numbalade'=>$unebalade]); // ou execute([':numbalade'=>$unebalade]);

                                   
            $result = $pdostatement->fetchObject('balade');   
            
            return $result;
        }
        public function insertBalade($titre, $pseudo, $type, $cp, $ville, $country, 
                                     $begin, $arrival, $descrip, $etap, $foto)
               
        {
            $insertrequest  = "INSERT INTO Balade (titre, pseudo, type, codepostal, ";
            $insertrequest .= "ville, pays, lieudepart, lieuarrivee, description, etapes, photo) ";
            $insertrequest .= "VALUES (:titre, :pseudo, :type, :codepostal, :ville, :pays, ";
            $insertrequest .= ":lieudepart, :lieuarrivee, :description, :etapes, :photo )";
                      
            
            $pdostatement = $this->connexion->prepare($insertrequest);
            $pdostatement->execute(array( ":titre" => $titre, ":pseudo" => $pseudo, 
                        ":type" => $type, ":codepostal" => $cp, ":ville" => $ville,
                        ":description" => $descrip, ":etapes" => $etap, ":photo" => $foto ));
                        ":pays" => $country, ":lieudepart" => $begin, ":lieuarrivee" => $arrival,

            //var_dump($pdostatement->errorInfo());
            //Récupérer l'ID créé lors de l'ajout de l'enregistrement dans Balade
    
            
            $id = $this->connexion->lastInsertId();
            return $id;           
    
        }