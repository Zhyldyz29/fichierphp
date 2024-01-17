<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Choisissez des fruits</p>
    <form action="checkbox.php" method="GET">
        <input type="checkbox" name="fruit[]" value="Fraise"> Fraise <br>
        <input type="checkbox" name="fruit[]" value="Pomme"> Pomme <br>
        <input type="checkbox" name="fruit[]" value="Poire"> Poire <br>
        <input type="checkbox" name="fruit[]" value="Banane"> Banane <br>
        <input type="checkbox" name="fruit[]" value="Cerise"> Cerise <br>
        <input type="submit" value="envoyer">

</form>
</body>
</html>