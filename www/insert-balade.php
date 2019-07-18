<?php
    //On aurait utiliser classiquement require tout court
    require_once 'database.php';  //Import de la classe database.php
    require_once 'balade.php';

        
    $nombd='Promenades';
    $user ='adminBalades';
    $pwd  ='BAladesbalades';
    

    $myconnection = New Database($nombd, $user, $pwd);

    if($myconnection->getConnexion() == NULL) {
        echo "La connection à la Database " .$nombd ." n'a pas pu se Faire";
        var_dump($myconnection);
    }
    else {
        echo "La connection à la Database " .$nombd ." a Réussi";
        
    }

    $titre   = strip_tags($_POST['username']);
    $pseudo  = strip_tags($_POST['pseudo']);
    $type    = $_POST['opt'];
    $cp      = strip_tags($_POST['cp']);
    $ville   = strip_tags($_POST['ville']);
    $country = strip_tags($_POST['pays']);
    $begin   = strip_tags($_POST['depart']);
    $arrival = strip_tags($_POST['arrivee']);
    $descrip = strip_tags($_POST['descrip']);
    $etap    = strip_tags($_POST['itineraire']);
    $foto    = $_POST['www.rts.ch/foto.jpeg'];

    
    
    $numbalad = $myconnection->insertBalade($titre, $pseudo, $type, $cp, $ville, $country, 
                                     $begin, $arrival, $descrip, $etap, $foto);

    echo $numbalad;

    //header('Location: afficherChien.php?id='.$nouvelId); 

    exit;


        
/*
    $etap  ="Les Diablerets - Isenau station - Isenau - Col des Andérets - Chalet Vieux - ";
    $etap .="Lac

    $titre  = "Au-dessus du village des Diablerets";
    $pseudo = "Adrien";
    $type = "S";
    $cp = "1863";
    $ville = "Les Diablerets";
    $country = "Suisse";
    $begin   = "Les Diablerets";
    $arrival = "La Corba";
    $descrip = "Longue montée avec une vue sur les alpes vaudoises";

    $etap  ="Les Diablerets - Isenau station - Isenau - Col des Andérets - Chalet Vieux - ";
    $etap .="Lac Retaud - Col du Pillon - La Corba";

    $foto = "https ://images0.schweizmobil.ch/image/Les_Diablerets__824_a.jpg";

*/

    


?>

