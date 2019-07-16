<?php
require_once("database.php");
require_once("balade.php");


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
<html>
    <header>
        <link rel="stylesheet" href="style.css"> 
    </header>
    <body>
    <?php foreach($balades as $balade){ ?>
        <h3>Titre : <?php echo $balade->getTitre(); ?></h3>
            <p> Pays : <?php echo $balade->getPays(); ?> Ville <?php echo $balade->getVille(); ?> De : <?php echo $balade->getPseudo(); ?></p>
        <?php } ?>
        <a href="process-delete.php?id=<?php echo $chien->getId(); ?>">Delete</a>
        <a href="updateChien.php?id=<?php echo $chien->getId(); ?>">Update</a>
    </body>
</html>