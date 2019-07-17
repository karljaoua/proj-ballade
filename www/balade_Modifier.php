
<!DOCTYPE html>
<html lang="fr">

    <?php
require_once("database.php");
?>

    <header>
        <link rel="stylesheet" href="style.css"> 
    </header>
    <body>
        <h1>Modification d'une randonnée.</h1>


        <form action="processUpdate.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id->getId(); ?>">
            <label for="id">Id</label>
            <input type="text" id="titre" name="titre" value="<?php echo $titre->getNom(); ?>" required>
            <label for="Titre">Titre</label>

            <input type="text" id="pseudo" name="pseudo" value="<?php echo $pseudo->getNom(); ?>" required>
            <label for="pseudo">Pseudo</label>

            <input type="text" id="type" name="type" value="<?php echo $type->getNom(); ?>" required>
            <label for="type">Type</label>

            <input type="number" id="codepostal" name="codepostal" value="<?php echo $codepostal->getAge(); ?>" required>
            <label for="codepostal">Code postal</label>

            <input type="text" id="ville" name="ville" value="<?php echo $ville->getNom(); ?>" required>
            <label for="ville">Ville</label>

            <input type="text" id="pays" name="pays" value="<?php echo $pays->getNom(); ?>" required>
            <label for="pays">Pays</label>

            <input type="text" id="lieudepart" name="lieudepart" value="<?php echo $lieudepart->getNom(); ?>" required>
            <label for="lieudepart">Lieudepart</label>

            <input type="text" id="lieuarrivee" name="lieuarrivee" value="<?php echo $lieuarrivee->getNom(); ?>" required>
            <label for="lieuarrivee">lieuarrivee</label>

            <input type="text" id="lieuarrivee" name="lieuarrivee" value="<?php echo $lieuarrivee->getNom(); ?>" required>
            <label for="lieuarrivee">Lieuarrivee</label>

            <input type="text" id="description" name="description" value="<?php echo $description->getNom(); ?>" required>
            <label for="description">Description</label>

            <input type="text" id="etapes" name="etapes" value="<?php echo $etapes->getNom(); ?>" required>
            <label for="etapes">Etapes</label>

            <input type="image" id="photo" name="photo" value="<?php echo $photo->getNom(); ?>" required>
            <label for="photo">Photo</label>

<input type="text" id="raceChien" name="race" value="<?php echo $dog->getRace(); ?>" required>           

<input type="submit" value = "Mettre à jour">

        </form>

        <!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Yeseva One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    
</head>

<body>

    <!------Section 6  Page du Right Food-->
    <section>
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 categ-balades">
  
                    <div class="mx-auto text-center title-action-balades mb-5">Modifier une balade</div>

                </div> <!-- class="col-lg-12 -->
            </div>      <!-- Fin du 1er Row englobant Menu + Titre +Auteur -->  
            
            <!-- ------------FIN DE PARTIE ENTETE----------- -->

            <div class="row">

               
                <div class="col-lg-6 col-xs-12">

                        

                    

                    <form>
                        <div class="form-balade">                        
                             
                                <div class="styledebalade" >
                                        <label for="typebalade" class="col-lg-2 col-sm-10 col-form-label lbl-balade letype">Type de balade: </label>
                                        <label class="radio-inline"><input type="radio" name="opt" id="opt-0" value = "F" checked>Famille </label>                            
                                        <label class="radio-inline"><input type="radio" name="opt" id="opt-1" value = "S">Sportif</label>                   
                                        
                                </div>
                            

                            <div class="form-group row">
                                
                                

                                
                                <label for="pseudo" class="col-lg-2 col-form-label lbl-balade">Pseudo Auteur: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputpseudo" placeholder="Pseudo de l'Auteur">
                                </div>

                                <label for="codepostal" class="col-lg-2 col-form-label lbl-balade">Code postal: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputcp" placeholder="Code postal">
                                </div>
                                

                                <label for="ville" class="col-lg-2 col-form-label lbl-balade">Localité: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputville" placeholder="Localité">
                                </div>
                                

                                <label for="pays" class="col-lg-2 col-form-label lbl-balade">Pays: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputpays" placeholder="Pays">
                                </div>
                                
                                <label for="depart" class="col-lg-2 col-form-label lbl-balade">Départ: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputdepart" placeholder="Départ">
                                </div>

                                <label for="arrivee" class="col-lg-2 col-form-label lbl-balade">Arrivée: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputpays" placeholder="Arrivée">
                                </div>

                                <label for="descrip" class="col-lg-2 col-form-label lbl-balade">Description: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputdescrip" placeholder="Description">
                                </div>

                                <label for="itineraire" class="col-lg-2 col-form-label lbl-balade">Itinéraire: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control champsform" id="inputitineraire" placeholder="Itinéraire">
                                </div>

                            </div>

                            <!--Ici 2 Boutons pour Renoncer/Confirmer à la Modification-->

                            
                        </div>
                    </form>


                    <div class="btn-group-horizontal d-flex justify-content-around thebtn" role="group" aria-label="Basic example">
               
                            <button type="button" class="btn-lg btn-danger   modifier_btn ">Abandonner les Modif.</button>
                            <button type="button" class="btn-lg btn-success  modifier_btn">Confirmer  les Modif.</button>
                    </div>
                        

                </div>

                <div class="col-lg-6 col-xs-12 d-block"> 
                    <!-- <div class="img-fluid float-right col-md-6 image_balade_box"> -->
                         
                    <div class="image_balade">
                              
                    </div>
                    
                    <form class="lg-form d-flex justify-content-center" action="#">  <!-- <div class="form-group "></div>-->
            
                        <div class="modifier_btn">
                             <label class="file-upload btn-primary ">Sélectionner un fichier image ... 
                              <input type="file" accept=".png, .jpg, .jpeg"  />
                              </label>
                         </div> 
                        


                    </form>
                

            </div> <!--  le div du Second Row -->


        

                            <!-- <img src="/home/cf/proj_balades/www/images/Legibloux.jpg" alt="Nature"> -->

            

        </div>  <!-- div class="container-fluid" -->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>

    </body>


</html>