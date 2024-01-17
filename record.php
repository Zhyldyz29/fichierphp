<?php

require('fonctions.php');

debug($_POST); // variable PHP prédéfinie qui récupère les champs input du formulaire appelant.
// ecrire les donées dans un fichier


foreach($_POST as $cle => $valeur) {
    echo $cle . ":" . $valeur . ";";
}

$phrase = $_POST['nom'].';'.$_POST['prenom'].';'.$_POST['age'];

$fh = fopen("unfichier.csv","a+");
fwrite($fh,$phrase."\n");
fclose($fh);



/* 
smith; jon; 6
durand; pol; 77
*/
?>
