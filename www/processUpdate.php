<?php
// PAGE INTERMEDIARE => QUE du PHP

// Récupérer les infos du formulaire avec $_POST

$id = $_POST["id"];
$titre = $_POST["titre"];
$pseudo = $_POST["pseudo"];
$type = $_POST["type"];
$codepostal = $_POST["codepostal"];
$ville = $_POST["ville"];
$pays = $_POST["pays"];
$lieudepart = $_POST["lieudepart"];
$lieuarrivee = $_POST["lieuarrivée"];
$description = $_POST["description"];
$etapes = $_POST["etapes"];
$photo = $_POST["photo"];


// Importer et instancier une database
require_once("database.php");
$database = new database();

// Appeler la fonction insertDog en lui passant les infos du formulaire
// Récupérer le nouvel id de la balade crée.
// insertDog($nom, $age, $race, $idMaitre)
$nouvelId = $database->balade_Modifier($id, $titre, $pseudo, $type, $codepostal, $ville, 
$pays, $lieudepart, $lieuarrivee ,$description, $etapes ,$photo);

// Rediriger l'utilisateur vers la page de profil de la balade
header('Location: Balade_Detail.php?id='.$id); 

?>