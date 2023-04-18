<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    print("<strong>PORTEES (Constantes)</strong><br>");

    // -------------------
    function uneFonction() {
        print("<br>Constante dans la fonction : " . PI);
    }

    define("PI", 3.14); // --- Constante donc globale
    print("Constante dans le script : " . PI);
    // --- L'appel de la fonction
    uneFonction();
?>
</body>
</html>