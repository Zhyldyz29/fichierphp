<?php

require('fonctions.php');

if (file_exists('exports.csv') && is_file('exports.csv')) {

$handler = fopen('exports.csv', 'r');

echo "<table border=1>"; // continuer le tableau.

while(!feof($handler)) {

    $ligne = fgets ($handler);
 
    // explode est equivalent du split de JS 
    $tab = explode(';', $ligne);
   // debug($tab);
    echo "<tr>";
    foreach($tab as $cell) {
        echo "<td>".$cell."</td>";
    }
    echo "</tr>";
}
echo "</table>";
} 
   ?>  
 
