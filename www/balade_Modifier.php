<!DOCTYPE html>
<html lang="fr">

<head>
    <title>balade_Modifier.php</title>
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