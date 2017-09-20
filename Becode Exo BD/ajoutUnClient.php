<?php
require 'connection.php';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date'])){


  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date = $_POST['date'];

    if (isset($_POST['fidility'])) {
          if ($_POST['fidility'] === 'on') {
           $fidility = 1;
           if (isset($_POST['card'])) {
             $number = $_POST['card'];
           }
          }
      $connect->prepare("INSERT INTO clients (firstName, lastName, birthDate, card,cardNumber) VALUES('$nom','$prenom','$date','$fidility', '$number')")->execute();
    }
    else {
      echo "pas de carte";
        $fidility = 0;
        $connect->prepare("INSERT INTO clients (firstName, lastName, birthDate, card) VALUES('$nom','$prenom','$date','$fidility')")->execute();
    }
}

 ?>
