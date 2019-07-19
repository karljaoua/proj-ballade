<?php
    //On aurait utiliser classiquement require tout court
    require_once 'database.php';  //Import de la classe database.php
    require_once 'balade.php';

    $myconnection = New Database(); //$nombd, $user, $pwd);

    if($myconnection->getConnexion() == NULL) {
        //echo "La connection à la Database " .$nombd ." n'a pas pu se Faire";
        //var_dump($myconnection);
    }

    else {
        //echo "La connection à la Database " .$nombd ." a Réussi <br/>";
        
    }
    
    //echo $_FILES['imgfile'];


    $titre   = strip_tags($_POST['titre']);
    $pseudo  = strip_tags($_POST['pseudo']);
    $type    = $_POST['opt'];
    $cp      = strip_tags($_POST['cp']);
    $ville   = strip_tags($_POST['ville']);
    $country = strip_tags($_POST['pays']);
    $begin   = strip_tags($_POST['depart']);
    $arrival = strip_tags($_POST['arrivee']);
    $descrip = strip_tags($_POST['descrip']);
    $etap    = strip_tags($_POST['itineraire']);

    $errors= array();
    $file_name = "images/".$_FILES['imgfile']['name'];
    $file_size =$_FILES['imgfile']['size'];
    $file_tmp =$_FILES['imgfile']['tmp_name'];
    $file_type=$_FILES['imgfile']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['imgfile']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){

        // Check if file already exists
        if (!file_exists($file_name)) {
            move_uploaded_file($file_tmp,$file_name);
            //echo "Success";
        }
    }else{
        print_r($errors);
    }
    
        
        
        $numbalad = $myconnection->insertBalade($titre, $pseudo, $type, $cp, $ville, $country, 
                                        $begin, $arrival, $descrip, $etap, $file_name);
    
        //echo $numbalad;
    
        $ph = "Location: Balade_Detail.php?id=" .$numbalad;
    
        
    
        header($ph); 
    
    
        exit;

    



    
        
    
    

    


        
/*

    $nombd='Promenades';
    $user ='adminBalades';
    $pwd  ='BAladesbalades';


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

