<?php

define("CONSTANTE01", 66);

function compteur() {
    //variable static
    static $x = 0 ;
    echo "x".$x."<br>";
    $x++;

}

compteur();
compteur();
compteur();

echo "la constante CONSTANTE est: ".CONSTANTE01;

echo 'fichier courant'._FILE_; //fichier courant
echo 'fichier courant'._DIR_; //repertoire courant
echo 'ligne courante'._LINE_; //ligne courante


?>