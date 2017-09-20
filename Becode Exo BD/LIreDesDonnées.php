<?php

require 'connection.php';

$sql = "SELECT * FROM clients";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>'.$row['lastName']." ".$row['firstName'].'</p>';
}
echo "<hr>";

$sql = "SELECT * FROM showTypes";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>'.$row['type'].'</p>';
}

echo "<hr>";

$sql = "SELECT * FROM clients LIMIT 0,20";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>'.$row['lastName']." ".$row['firstName'].'</p>';
}
echo "<hr>";

$sql = "SELECT * FROM clients WHERE cardNumber IS NOT NULL";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>'.$row['lastName']." ".$row['firstName'].'</p>';
}

echo "<hr>";

$sql = "SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY firstname ASC ";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>Nom :'." ".$row['lastName'].'</p><p>Prénom :'." ".$row['firstName'].'</p>';
}

echo "<hr>";

$sql = "SELECT * FROM shows ORDER BY title ASC";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
echo '<p>'.$row['title']." par ".$row['performer']." le ".$row['date']." à ".$row['startTime'].'</p>';
}

echo "<hr>";

$sql = "SELECT * FROM clients";
// on execute la requete
$nb = $connect->query($sql);
// on affiche
while($row = $nb->fetch()){
  echo '<p>Nom: '.$row['firstName'].'</p><p>Prénom: '.$row['lastName'].'</p><p>Date de naissance :'.$row['birthDate'].'</p>';
  if ($row['card'] == 1) {
    echo "<p> Carte de fidélité : Oui </p><p>Numéro de la carte : ".$row['cardNumber']."</p>";
  }
  if ($row['card'] == 0) {
    echo "<p> Carte de fidélité : Non </p>";
  }
  echo '<hr />';
}

 ?>
