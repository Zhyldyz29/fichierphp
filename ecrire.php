<?php
//ecrire dans un fichier
$phrase = "une phrase\n";
$fh = fopen("unfichier.txt","a+");
fwrite($fh,$phrase);
fclose($fh);
?>
