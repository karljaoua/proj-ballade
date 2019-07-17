
<?php
     include("database.php");
    //Tapez dans l'url localhost/Afficherunchien.php?chien=7

    
        $myconnection = New Database('AnnuaireToutou', 'adminToutou', 'Annu@ireTOutOu');

        if(! ($myconnection->getConnexion() == NULL)) {

          echo "La connection à la Database des Maitres " .$nombd ." a Réussi"; 

          $liste_maitres = $myconnection->getAllmaitres(); 

          //liste_maitres est un Tableau contenant la liste des Maitres
          //On va la connecter à la liste dans le champ des Maitres pour une sélection depuis une liste
          

        }
        else {
          echo "La connection à la Database " .$nombd ." a Echoué";  
                   
        }
  


    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
  
  </head>
  
  <body>
    <!-- page content -->
        
              
    
          <h2>Formulaire de Saisie des Infos sur un Chien</h2>
          <br/>
          <br/>
          
          <form action="cible.php" method="POST"> 
                Nom du Chien: <br/>
                <input type = "text" name = "namedog" placeholder="Médor" required>
                <br/>
                Age du Chien: <br/>
                <input type = "number" name = "agedog"placeholder="1" required>
                <br/>
                La Race: <br/>
                <input type = "text" name = "racedog" placeholder="Fox terrier" required>
                <br/>
                <br/>

                <label for="ListeMaitres">Choisissez le Maitre</label>
                
                <select id= "ListeMaitres" name = 'select' required>;

                    <?php
                        
                        foreach($liste_maitres as $onemaitre) 
                        {
                            $ph  =  "<option value='"  .$onemaitre->getId() ."'>" ; 
                            $ph .=   $onemaitre->displayMaitre(" ") ."</option>" ;
                            
                            echo $ph;                       
                        }  

                    ?>

                </select>;
                <br/>
                <br/>


                <input type="submit" value="Enregistrer ce chien">

          </form>
          
          

          
		
  </body>
</html>

        