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

// --- Ce script liste les fichiers du dossier courant.
// --- Et les dossiers du dossier courant.
// --- $liRetour renvoie 0 si 0K et 1 si KO
// --- $lsDerniereLigne correspond à … 15 Rép(s)  23 046 651 904 octets libres

$lsDerniereLigne = exec("dir", $tFichiers, $liRetour);
if ($liRetour != 0) {
    die("Commande incorrecte");
}

$liCountFichiers = count($tFichiers);
echo "Nombre d'entr&eacute;es dans le dossier : $liCountFichiers<br>";
echo "<hr>Les dossiers<hr>";

for ($i = 0; $i < $liCountFichiers; $i++) {
    $lsLigne = $tFichiers[$i];
    $tElements = explode(" ", $lsLigne);
    $liCountElements = count($tElements);
    if (is_dir($tElements[$liCountElements1])) {
        echo $tElements[$liCountElements1], "<br>";
    }
    // --- Ne fonctionne pas au niveau de c:\\ ie hors de l'arbo du serveur httpd
}
echo "<hr>Les fichiers<hr>";
for ($i = 0; $i < $liCountFichiers; $i++) {
    $lsLigne = $tFichiers[$i];
    $tElements = explode(" ", $lsLigne);
    $liCountElements = count($tElements);
    if (is_file($tElements[$liCountElements1])) {
        echo $tElements[$liCountElements1], "<br>";
    }
    // --- Ne fonctionne pas au niveau de c:\\ ie hors de l'arbo du serveur httpd
}
echo "<hr>Derni&egrave;re ligne<hr>$lsDerniereLigne";
?>
</body>
</html>