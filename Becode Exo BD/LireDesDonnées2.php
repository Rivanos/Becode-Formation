<?php

  require 'connection.php';

  $sql = "SELECT * FROM showTypes";
  // on execute la requete
  $nb = $connect->query($sql);

  $sqll = "SELECT * FROM genres";
  // on execute la requete
  $nbb = $connect->query($sqll);

  $sqlll = "SELECT * FROM genres";
  // on execute la requete
  $nbbb = $connect->query($sqll);
?>

<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="ajoutUnClient.php" method="post">
       <label for="">Nom</label>
       <input type="text" name="nom" value="">
       <br/>
       <label for="">Prenom</label>
       <input type="text" name="prenom" value="">
       <br />
       <label for="">Date de naissance</label>
       <input type="date" name="date" value="">
       <br />
       <label for="">Carte de fidélité</label>
       <input type="checkbox" name="fidility">
       <br />
       <label for="">Numéro de la carte</label>
       <input type="number" name="card" value="">
       <br />
       <input type="submit" name="" value="Envoyer">
     </form>
     <hr>
     <form class="" action="ajoutUnSpectacle.php" method="post">
       <label for="">Nom</label>
       <input type="text" name="nom" value="">
       <br />
       <label for="">Artiste</label>
       <input type="text" name="artiste" value="">
       <br />
       <label for="">Jour du specacle</label>
       <input type="text" name="date" value="">
       <br />
       <label for="">type de spectacle</label>
       <select class="" name="type">
         <?php
         while($row = $nb->fetch()){
           echo '<option value='.$row['id'].'>'.$row['type'].'</option>';}
          ?>
       </select>
       <br />
       <label for="">Numéro du genre</label>
       <select class="" name="genre">
         <?php
         while($row = $nbb->fetch()){
           echo '<option value='.$row['id'].'>'.$row['genre'].'</option>';}
          ?>
       </select>
       <br />
       <label for="">Second numéro du genre</label>
       <select class="" name="genre2">
         <?php
         while($row = $nbbb->fetch()){
           echo '<option value='.$row['id'].'>'.$row['genre'].'</option>';}
          ?>
       </select>
       <br />
       <label for="">Duree du spectacle (hh:mm:ss)(Attention au format)</label>
       <input type="time" name="duree" value="">
       <br />
       <label for="">Heure du début (hh:mm:ss)(Attention au format)</label>
       <input type="time" name="time" value="">
       <br />
       <input type="submit" name="" value="envoyer">
   </form>
   <hr />
   <form class="" action="modifUnClient.php" method="post">
     <label for="">Nom</label>
     <input type="text" name="nom" value="">
     <br/>
     <label for="">Prenom</label>
     <input type="text" name="prenom" value="">
     <br />
     <label for="">Date de naissance</label>
     <input type="date" name="date" value="">
     <br />
     <label for="">Carte de fidélité</label>
     <input type="checkbox" name="fidility">
     <br />
     <label for="">Numéro de la carte</label>
     <input type="number" name="card" value="">
     <br />
     <input type="submit" name="" value="Envoyer">
   </form>
   <hr />
   </body>
 </html>
