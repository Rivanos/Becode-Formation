<?php require_once 'parc_voiture.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $voiture = new Voiture(3500, 'BE02569', 'Megane', 'Audi', 'blue', 80000, 2015);
        echo $voiture->immatriculation;
     ?>
  </body>
</html>
