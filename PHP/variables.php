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
  $prenom = 'Hugo';
  $age = 19;
 
  echo $prenom;        // Affiche 'Hugo'
  echo '&nbsp;: ';
  echo $age;        // Affiche 19
  echo '<br/>';
 
  $prenom = 'Hadrien';
  $age = 18;
 
  echo $prenom;        // Affiche 'Hadrien'
  echo '&nbsp;: ';
  echo $age;        // Affiche 18
  echo '<br/><br/><br/><br/>';
 
 
?>



<?php
  // Déclaration des variables
  $prenom = 'Hugo';
  $nom = 'Hamon';
  $identite = '';
  // On concatène $nom et $prenom dans $identite
  $identite = $prenom .' '. $nom;
  // Affiche 'Hugo Hamon'
  echo $identite;
  echo '<br/><br/><br/><br/>';
?>


<?php
  // Déclaration des variables
  $prenom = 'Hugo';
  $nom = 'Hamon';
  // On concatène $nom dans $prenom
  $prenom .= ' '. $nom;
  // Affiche 'Hugo Hamon'
  echo $prenom;
  echo '<br/><br/><br/><br/>';
?>

<?php
  // Déclaration des variables mathématiques
  $a = 10;
  $b = 2;
  $c = 0;
  // $c vaut 10+2 = 12
  $c = $a + $b;
  echo $c;
  echo '<br/>';
  // $c vaut 10x2 = 20
  $c = $a * $b;
  echo $c;
  echo '<br/>';
  // $c vaut 10/2 = 5
  $c = $a / $b;
  echo $c;
  echo '<br/>';
  // $c vaut 10-2 = 8
  $c = $a - $b;
  echo $c;
  echo '<br/>';
  // $c vaut le reste de la division de $a par $b soit 0
  $c = $a % $b;
  echo $c;
  echo '<br/>';
  // Incrémentation de $a
  $a++;
  // Décrémentation de $b
  $b--;
  echo '<br/><br/><br/><br/>';
?>


<?php
  // Définition des variables
  $poupee = 25;
  $voiture = 17;
  $console = 250;
  // Choix d'un jouet
  $jouet = 'console';
  // Affichage du prix du jouet sélectionné
  echo $jouet ,' : ', $$jouet ,'€';  // Retourne 'console : 250€'
  echo '<br/><br/><br/><br/>';
?>


<?php
  // Déclaration de la variable
  $prenom = 'Hugo';
 
  echo isset($prenom);  // Retourne TRUE -> affiche 1
  echo '<br/>';
  echo isset($nom);  // Retourne FALSE -> n'affiche rien
  echo '<br/>';
?>


<?php
  // Déclaration des variables
  $prenom = 'Hugo';
  $nom = 'Hamon';
  $age = 19;
  $estEtudiant = true;
  echo $prenom;
  // Suppression d'une variable
  unset($prenom); 
  // Suppression de plusieurs variables
  unset($nom, $age, $estEtudiant);
?>


</body>
</html>