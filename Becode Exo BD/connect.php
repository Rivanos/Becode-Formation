<?php

// page ou on fait la connexion à la DB
require 'connexion.php';
// on place la requete SQL dans une variable
$sql = "SELECT * FROM students";

// on execute la requete
$nb = $pdo->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>'.$row['nom'].'</p>';
}

 ?>
