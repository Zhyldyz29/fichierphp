<?php

require('fonctions.php');

debug($_GET); // variable PHP prédéfinie qui récupère les champs input du formulaire appelant.
// ecrire les donées dans un fichier


foreach($_GET as $cle => $valeur) {
    echo $cle . ":" . $valeur . "<br>";
}

$phrase = $_GET['nom'].';'.$_GET['prenom'].';'.$_GET['age'];

$fh = fopen("unfichier.csv","a+");
fwrite($fh,$phrase."\n");
fclose($fh);



/* 
smith; jon; 6
durand; pol; 77
*/
?>
