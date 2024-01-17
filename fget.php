<?php

require('fonctions.php');

if (file_exists('exports.csv') && is_file('exports.csv')) {

$handler= fopen('exports.csv', 'r');
  
    echo fgets($handler);
    echo "<br>";
    echo fgets($handler);
    

} 
   ?>  