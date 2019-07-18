
<!DOCTYPE html>
<html lang="fr">

<?php
    require_once 'database.php';  //Import de la classe database.php
    require_once 'balade.php';


    $myconnection = New Database();

  /*  if($myconnection->getConnexion() == NULL) {
        echo "La connection à la Database " .$nombd ." n'a pas pu se Faire";
        var_dump($myconnection);
    }
    else {
        echo "La connection à la Database " .$nombd ." a Réussi";
        
    }
*/

    $number = 3;

    $labalade = $myconnection->listUnebalade($number);

    //var_dump($labalade);
  /*  echo $labalade->getTitre(); echo "<br/>";echo "<br/>";*/
?>

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Yeseva One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    
</head>

<body class="fondB">

    <!------Section 6  Page du Right Food-->
    <section>
        <div class="container-fluid">

            <div class="col-lg-12 categ-balades">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#">Logo</a>
                    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Balade_Ajouter.php">Ajouter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="balade_Modifier.php">Modifier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liste des Balades</a>
                        </li>
                        </ul>
                    </div>
                </nav>

                <br/>

                    
                <div class="mx-auto text-center title-categ-balades mb-5">
                    <?php echo $labalade->getTitre(); ?>
                    <!-- Vers la Gruyère par les flancs du Gibloux -->
                </div>


                <div class="mb-5 divi-pseudo">
                    <span class="pseudo">Proposé par <?php echo $labalade->getPseudo(); ?></span>                     
                </div>

                <div class="row">

               
                        <div class="col-lg-6 col-xs-12">
        
                            <div class="typebalade">                        
                                <label class="radio-inline"><input type="radio" name="opt" value = "F" <?php if($labalade->getType()=="F"){ echo "checked";}?>>Famille</label>                            
                                <label class="radio-inline"><input type="radio" name="opt" value = "S" <?php if($labalade->getType()=="S"){ echo "checked";}?>>Sportif</label>                   
                            </div>
    
                            <div class="vertic-space" >
                                <span class="cplieu"><?php echo $labalade->getCodepostal() ." " .$labalade->getVille() ; ?></span>
                                <br/>
                                <span class="cplieu"><?php echo $labalade->getPays(); ?></span>                        
                            </div>
    
                            <div class="dep-arr vertic-space">
                                <span class="deparr vertic-space"><strong>Départ: </strong><?php echo $labalade->getLieuDep(); ?></span> 
                                <br/>
                                <span class="deparr vertic-space"><strong>Arrivée: </strong><?php echo $labalade->getLieuArr(); ?></span>
                                
                            </div>
                            <br/>
                            <div class="balade-descrip-block">
                                    <span class="titleDescrip">Description<br/></span>
                                    
                                    <span class="balade-descrip"><?php echo $labalade->getDescrip(); ?></span>
                            </div>
                            
                            <br/>
    
                            <div class="balade-descrip-block">
                                    <span class="titleDescrip">Itinéraire<br/></span>
                                
                                    <span class="balade-descrip"><?php echo $labalade->getEtapes(); ?></span>
                            </div>
    
                            <br/>
        
                        </div>  <!--class="col-lg-6 col-xs-12"> -->
        
                        <div class="col-lg-6 col-xs-12 mb-5 categ-balades image_balade d-block">
                            <!-- <div class="img-fluid float-right col-md-6 image_balade_box"> -->
                                 
                            <div class="image_balade" style= "background-image: url('images/<?php echo $labalade->getPhoto(); ?>');" >
                                <br/>  
                            </div>
                            
                        </div>
        
            
                        <div class="col-12 mb-4 text-center ">
      
                                        <button type="button" class="btn-success btn-block list-return">Retour à la Liste</button>
 
                        </div>
        
                        <!-- <img src="/home/cf/proj_balades/www/images/Legibloux.jpg" alt="Nature"> -->
  
                
            </div> <!--  le div du Row Principal -->
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>