<?php

  require 'connection.php';
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['card'])) {
    $date = $_POST['date'];
    $req= $connect->prepare('UPDATE clients SET birthDate= "'.$date.'" WHERE lastName= "Perry" AND firstName= "Gabriel"')->execute();
  }

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
  echo "bonjour";
  $nom = $_POST['prenom'];
  $prenom = $_POST['nom'];
  $sql = 'SELECT * FROM clients WHERE firstName = "'.$nom.'" AND lastName = "'.$prenom.'"';
  $nb = $connect->query($sql);
  while ($row = $nb->fetch()) {
    echo '<form class="" action="modifUnClient.php" method="post">
      <label for="">Nom</label>
      <input type="text" name="nom" value="'.$row['lastName'].'">
      <br/>
      <label for="">Prenom</label>
      <input type="text" name="prenom" value="'.$row['firstName'].'">
      <br />
      <label for="">Date de naissance</label>
      <input type="date" name="date" value="'.$row['birthDate'].'">
      <br />
      <label for="">Carte de fidélité</label>
      <input type="checkbox" name="fidility" value="">
      <br />
      <label for="">Numéro de la carte</label>
      <input type="number" name="card" value="'.$row['cardNumber'].'">
      <br />
      <input type="submit" name="" value="Modifier">
    </form>';
  }
}

?>
