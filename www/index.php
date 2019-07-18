


<!DOCTYPE html>
<html lang="fr">
<?php
require_once("database.php");
require_once("balade.php");
$database = new Database();
$balades = $database->getAllBalade ();  
?>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nos petites balades</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    
    </head>
    <body class="fondB">
    <div class="navb">
            <ul class="nav justify-content-center nb">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Balade_Ajouter.php"> Ajouter une randonnée</a>
                </li>
            </ul>
    </div>
        <div class="container p1">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 csize" src="images/potoSlide1.jpg" alt="First slide">
                            <div class="carousel-caption d-block">
                                <h3 class="titrePrincipal">Nos petites balades</h3>
                                <h5 class="textCarousel">"venez partager vos experience"</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/potoSlide2.jpg" alt="Second slide">
                            <div class="carousel-caption d-block">
                                <h3 class="titrePrincipal">Nos petites balades</h3>
                                <h5 class="textCarousel">"venez partager vos experience"</h5>
                            </div>
                        </div> 
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/potoSlide3.jpg" alt="Second slide">
                            <div class="carousel-caption d-block">
                                <h3 class="titrePrincipal">Nos petites balades</h3>
                                <h5 class="textCarousel">"venez partager vos experience"</h5>
                            </div>
                        </div>     
                    </div>    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <a class="col-8 offset-2 text-center btn-sm btn  btn-outline-dark" href="Balade_Ajouter.php"> Ajouter une randonnée</a>

            </div>
        </div>
<!--Xavier liste des randonnées-->

              

                   <!--  <div class="col-sm-none col-lg-6">
                                <img class="image" src="/home/cf/proj-ballade-master/proj-ballade/www/images/randonnée.jpg" alt="Thumbnail image">
                    </div>
                    -->

<div class="container-fluid black"> 
    <div class=" row">
        <div class="col-lg-6 d-flex flex-column">
            <div>
                <!--<img class="img-thumbnail" src="/home/cf/proj-ballade-master/proj-ballade/www/images/miniature_1.jpg" alt="Thumbnail image"> -->
                <div class="lindex">
             <?php foreach($balades as $balade){ ?>
                <a href="Balade_Detail.php?id=<?php echo $balade->getId(); ?>"><h3 class='tbalade'> Titre : "<?php echo $balade->getTitre(); ?></h3></a>    
                <a href="Balade_Detail.php?id=<?php echo $balade->getId(); ?>"><p class="textbalade"> Pays : <?php echo $balade->getPays(); ?> Ville <?php echo $balade->getVille(); ?> De : <?php echo $balade->getPseudo(); ?></p></a>
            <?php } ?>
                </div>
            </div>
        </div>
            <!---Carousel---->
        <div class="col-6 photo">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/img1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                        <div class="carousel-item">
                        <img src="images/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
        <div class="container">
            <div class="row  justify-content-center">
<footer class="page-footer font-small dark">
<div class="footer-copyright py-2">© 2019 Copyright : 
<a  class="lienFooter" href="https://www.realise.ch/fr"> realise.ch/fr </a>
</div>
</footer>
</div>
</div>
      


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
        

</html>


