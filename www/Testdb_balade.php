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

    $number = 2;

    $labalade = $myconnection->listUnebalade($number);
       
    //var_dump($labalade);
    echo $labalade->getTitre(); echo "<br/>";echo "<br/>";



    $allbalades = $myconnection->getAllbalades();

    foreach($allbalades as $unebalade){
        echo $unebalade->getTitre();
        echo "<br/>";

    }

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
    
    $numbalad = $myconnection->insertBalade($titre, $pseudo, $type, $cp, $ville, $country, 
                                     $begin, $arrival, $descrip, $etap, $foto);

    echo $numbalad;


        
    //var_dump($allbalades) ;  
        

?>