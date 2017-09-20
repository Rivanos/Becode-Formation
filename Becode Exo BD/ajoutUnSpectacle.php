<?php

  require 'connection.php';

  if (isset($_POST['nom']) &&
    isset($_POST['artiste']) &&
    isset($_POST['date']) &&
    isset($_POST['type']) &&
    isset($_POST['genre']) &&
    isset($_POST['genre2']) &&
    isset($_POST['duree']) &&
    isset($_POST['time'])) {




      $nom = $_POST['nom'];
      $artiste = $_POST['artiste'];
      $date = $_POST['date'];
      $type = $_POST['type'];
      $genre = $_POST['genre'];
      $genre2 = $_POST['genre2'];
      $duree = $_POST['duree'];
      $time = $_POST['time'];


        $connect->prepare("INSERT INTO shows (title, performer, dates, showTypesId, firstGenresId, secondGenreId, duration, startTime) VALUES('$nom', '$artiste', '$date', '$type', '$genre', '$genre2', '$duree', '$time')")->execute();
    }
?>
