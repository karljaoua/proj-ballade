<!DOCTYPE html>

<?php
    //On aurait utiliser classiquement require tout court
    require_once 'database.php';  //Import de la classe database.php

        
    $nombd='AnnuaireToutou';
    $user='adminToutou';
    $pwd='Annu@ireTOutOu';
    

    $myconnection = New Database($nombd, $user, $pwd);

    if($myconnection->getConnexion() == NULL) {
        echo "La connection à la Database " .$nombd ." n'a pas pu se Faire";
        var_dump($myconnection);
    }
    else {
        //echo "La connection à la Database " .$nombd ." a Réussi";
        $idchien =  $_GET['id'];
        $nom     =  $_GET['nom'];
        $age     =  $_GET['age'];
        $race    =  $_GET['race'];
        
        $resultat = $myconnection->updateChien($idchien, $nom, $race, $age);
        //updateChien retourne un objet Chien si la maj s'est bien passée

        

        //"UPDATE Chiens SET nom = "Gregory", age = 6, race ="Lévrier" WHERE id = :idchien";

        //echo("Le chien N° " .$idchien   ." a bien été Supprimé de la BD");
        //php url redirection

        if( ! $resultat == NULL)
            {
                echo "Mise à jour Réussie" ; //header("Location: " . TestDatabase2.php, true, 301);
                
                echo $resultat->displayChienCard() ;
                
            }
        else    
            echo "Mise à jour du Chien Impossible";

        //exit();  //Facultatif
    }
?> 
        

 