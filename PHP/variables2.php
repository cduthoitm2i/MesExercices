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
$v;
echo "*$v*<br>"; // --- Renverra Vide
if(empty($v)) echo "Vide<br>"; else echo "Plein<br>";

$v = "";
echo "*$v*<br>"; // --- Renverra Vide
if(empty($v)) echo "Vide<br>"; else echo "Plein<br>";

$v = 10;
echo "*$v*<br>"; // --- Renverra Plein
if(empty($v)) echo "Vide<br>"; else echo "Plein<br>";

$v = "Mot";
echo "*$v*<br>"; // --- Renverra Plein
if(empty($v)) echo "Vide<br>"; else echo "Plein<br>";
?>
</body>
</html>