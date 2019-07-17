<?php
    require_once 'balade.php';
    

    class Database {

        private $connexion;
    
        public function __construct($nombd='Promenades',$user='adminBalades',$pwd='BAladesbalades' ) {
            $PARAM_hote = 'mariadb';  // Chemin du serveur
            $PARAM_port = '3306';       // port de connexion

            //Les 3 param suivants sont essentiels, si on ne les passe pas, ils seront pris ciomme défaut

            /*$PARAM_nom_bd      = 'AnnuaireToutou';
            $PARAM_utilisateur = 'adminToutou' ;
            $PARAM_mot_passe   = 'Annu@ireTOutOu' ;*/

            $PARAM_nom_bd      = $nombd;
            $PARAM_utilisateur = $user ;
            $PARAM_mot_passe   = $pwd; 
            

            try{
                
                $this->connexion = new PDO('mysql:host=' .$PARAM_hote .';dbname=' .$PARAM_nom_bd,
                                $PARAM_utilisateur, $PARAM_mot_passe );
                    
                } catch(Exception $e) {
                    echo "Erreur: "  .$e->getMessage() .'<br/>';
                    echo "Code N°: " .$e->getCode();
                    var_dump($this->connexion);
                } //Fin du Catch

               
                
        }  //Fin Constructeur

        public function getConnexion() {
            
            return $this->connexion;
        }

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

        public function getAllbalades() {

            //Sélectionner tous les maitres de la BD
            $listrequest  = "SELECT * FROM Balade"; 

            $pdostatement = $this->connexion->prepare($listrequest);
            $pdostatement->execute();  //Sélection de tous les Maîtres

            $result = $pdostatement->fetchAll(PDO::FETCH_CLASS, 'balade');

            //var_dump($result);


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
                        ":pays" => $country, ":lieudepart" => $begin, ":lieuarrivee" => $arrival,
                        ":description" => $descrip, ":etapes" => $etap, ":photo" => $foto ));

            //var_dump($pdostatement->errorInfo());
    
            //Récupérer l'ID créé lors de l'ajout de l'enregistrement dans Balade
            $id = $this->connexion->lastInsertId();
            
            return $id;           
    
        }

        public function getDogbyID($idchien) {
            $listrequest  = "SELECT C.id, C.nom, C.age, C.race FROM Chiens C WHERE C.id = :lechien ";
            
            $pdostatement = $this->connexion->prepare($listrequest);
            $pdostatement->execute(["lechien" => $idchien]);

            //ou bien on peut utiliser $pdostatement->execute("idChien" => $thechien);
                        
            $result = $pdostatement->fetchObject('Chien');

            return $result;
        }
        
        public function DeleteChien($idchien) {
            
            $sqlrequest = "DELETE FROM Chiens WHERE id = :idchien";  // $sqlrequest = "DELETE FROM Chiens WHERE id = ?"; 
            
            $stmt =$this->connexion->prepare($sqlrequest);
            $stmt->execute( array("idchien" => $idchien) );  // $stmt->execute([$idchien]); 

            //Récup de la érer le code d'erreur de la requete SQL Delete
            $errorcode = $stmt->errorCode();

            return ($errorcode == 0);  //Requete SQL renvoie toujours la valeur 0 si c'est bien passé
        }

        public function updateChien($idchien, $nom, $race, $age) {  

            //Cette fonction retourne un objet de type chien si la màj a fonctionné
            
            //$sqlrequest = "UPDATE Chiens SET nom = "Gregory", age = 6, race ="Lévrier" WHERE id = :idchien";  // $sqlrequest = "DELETE FROM Chiens WHERE id = ?"; 
            
            $sqlrequest = "UPDATE Chiens SET nom = :nomChien, age = :ageChien, race = :raceChien WHERE id = :idChien";  
            // $sqlrequest = "UPDATE Chiens SET nom = ..., race = ..., age = .... WHERE id = ... ;"; 
            
            $stmt =$this->connexion->prepare($sqlrequest);
            
            
            //$stmt->execute( array("nomChien" => $nom, "ageChien" => $age, "raceChien" => $race, "idChien" => $idchien ));  // $stmt->execute([$idchien]); 

            //Attention les titres du Tableau Associatif seront scrupuleusement IDENTIQUES que les variables de la requête
            //SQL et qui sont précédées par :
            $stmt->execute( ["nomChien" => $nom, "ageChien" => $age, "raceChien" => $race, "idChien" => $idchien] );

            //Récup de la érer le code d'erreur de la requete SQL Delete
            $errorcode = $stmt->errorCode();

            if ($errorcode == 0) {
                //On va resélectionner ce chien pour le renvoyer en affichage
                //Pour celà je dois redonner un SQL ... SELECT ... WHERE id = ...
                    $listrequest  = "SELECT * FROM Chiens WHERE id =  :idChien";
                    $stmt =$this->connexion->prepare($listrequest);
                    $stmt->execute( ["idChien" => $idchien ] );

                    $result = $stmt->fetchobject('Chien');

                    return $result;

            }  //Requete SQL renvoie toujours la valeur 0 si c'est bien passé
            else    
                {
                    return NULL;
                }
        }


    }// Class Database
?>
