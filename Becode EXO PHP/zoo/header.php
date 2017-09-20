<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <nav>
        <?php
            $animal = ["crocodile", "cheval", "elephant", "tigre", "girafe"];
            for ($i=0; $i < count($animal) ; $i++) {
              echo "<a href='index.php?animal=$animal[$i]'>$animal[$i]</a> ";
            }
         ?>
  </nav>
