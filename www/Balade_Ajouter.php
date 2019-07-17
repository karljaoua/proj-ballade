<!DOCTYPE html>
<html lang="fr">

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
    <section> <!-- hhh -->
        <div class="navb2">
                <ul class="nav justify-content-center nb">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Balade_Ajouter.php"> Ajouter une randonnée</a>
                    </li>
                </ul>
        </div>
        <div class="container-fluid">

            <div class="row">
					
                <div class="col-lg-12 categ-balades">
  
                    <h1 class="titrePrincipalA">Ajouter une nouvelle balade</h1>

                </div> <!-- class="col-lg-12 -->
            </div>      <!-- Fin du 1er Row englobant Menu + Titre +Auteur -->  
            
            <!-- ------------FIN DE PARTIE ENTETE----------- -->

            <div class="row">

               
                <div class="col-lg-7 col-xs-12">

                                            

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
                                    <textarea class="form-control" rows="3" id="inputdescrip" placeholder="Description"></textarea>
                                </div>

                                <label for="itineraire" class="col-lg-2 col-form-label lbl-balade">Itinéraire: </label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="3" id="inputitineraire" placeholder="Itinéraire"></textarea>

                                </div>

                            </div>

                            <!--Ici 2 Boutons pour Renoncer/Confirmer l'Ajout-->

                            
                        </div>
                    </form>


                    <div class="btn-group-horizontal d-flex justify-content-around thebtn" role="group" aria-label="Basic example">
               
                            <button type="button" class="btn btn-outline-danger modifier_btn x1">Abandonner l'Ajout</button>
                            <button type="button" class="btn btn-outline-success modifier_btn x1">Confirmer  l'Ajout</button>
                    </div>
                        

                </div>

                <div class="col-lg-5 col-xs-12 mb-5 d-block"> 
                    <!-- <div class="img-fluid float-right col-md-6 image_balade_box"> -->
                         
                    <div class="encadrage-image-balade">

                            <div class="justify-content-center btn-upload-file">
                                    <form class="lg-form" action="#">  <!-- <div class="form-group "></div>-->
            
                                        <div >
                                             <label class="file-upload btn-primary ">Sélectionner un fichier image ... 
                                              <input type="file" accept=".png, .jpg, .jpeg"  />
                                              </label>
                                         </div>
                                        
            
            
                                    </form>
                            </div>
                              
                    </div>

                    

                </div>   
                    <!--
                        <form>
                        <div class="file-field">
                            
                            <input type="file" class="custom-file-input" id="customFile" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="customFile">Choisir un fichier image</label>
                            </div>
                        </form>	
                    -->
					
				
                    
                

            </div> <!--  le div du Second Row -->


        

                            <!-- <img src="/home/cf/proj_balades/www/images/Legibloux.jpg" alt="Nature"> -->

            

        </div>  <!-- div class="container-fluid" -->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>