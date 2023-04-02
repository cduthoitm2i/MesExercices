<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  // Déclaration d'un tableau vide
  $fruits = array();
 
  // Déclaration d'un tableau indexé numériquement
  $legumes = array('carotte','poivron','aubergine','chou');
 
  // Déclaration d'un tableau associatif
  $identite = array(
 
      'nom' => 'Hamon', 
      'prenom' => 'Hugo', 
      'age' => 19, 
      'taille' => 180,
      'estEtudiant' => true
  );
 
?>  

<?php
  // Affichage des valeurs du tableau associatif
  echo 'Nom : ', $identite['nom'] ,'<br/>';
  echo 'Prénom : ', $identite['prenom'] ,'<br/>';
  echo 'Age : ', $identite['age'] ,' ans<br/>';
  echo 'Taille : ', $identite['taille'] ,' cm<br/><br/>';
?>

<?php
  // Déclaration de la matrice
  $matrice = array();
  $matrice[0] = array('A1','A2','A3');
  $matrice[1] = array('B1','B2','B3');
  $matrice[2] = array('C1','C2','C3');
?>

<?php
  // Retourne X
  echo $matrice[0][1], '<br/>';
  echo $matrice[1][1], '<br/>';
  echo $matrice[2][2], '<br/>';
  echo 'Erreur car n\'existe pas', $matrice[2][3], '<br/>';
?>

<?php
  $chaine = 'Bonjour le monde !';
?>

<?php
  $chaine = 'Bonjour le monde !';
 
  echo $chaine[3], '<br/><br/><br/><br/>';  // Affiche la lettre 'j'
?>

// Affichage du contenu d'un tableau
<?php
  echo '<pre>';
  print_r($identite);
  echo '</pre>';
?>


// Tri alphabétique : exemple #1 Exemple avec sort()<br/>
<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br/>";
}

?>

<br/><br/>
// Tri alphabétique : exemple #2 Exemple avec sort() en utilisant l'ordre naturel sans tenir compte de la casse<br/>
<?php

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br/>";
}

?>


</body>
</html>