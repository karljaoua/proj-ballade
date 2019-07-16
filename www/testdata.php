<?php
require_once("database.php");

/////

// J'affiche le titre de ma page
echo "<h1> Tests de la database : </h1>";

$database = new Database();

//Affichage du contenu de la variable pour debugger
var_dump($database);

if($database->getConnexion() == null){
    echo "<p>La connexion a échoué</p>";
}else{
    echo "<p>Connexion réussie</p>";
}
$balades = $database->getAllBalade ();
    
var_dump($balades);



?>