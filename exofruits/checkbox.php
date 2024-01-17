<?php

require('formulaires.php');


$name = $_GET['fruit'];




foreach($name as $fruit) {
    echo "Vous avez choisi: ".$fruit."<br>";
    $fh = fopen("fruits.txt","a+");
fwrite($fh,$fruit."\n");
fclose($fh);
}

?>