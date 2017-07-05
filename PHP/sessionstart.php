<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="user.php">Lien vers l'autre page.</a>
    <?php
    session_start();

    $_SESSION['nom'] = 'Mika';
    $_SESSION['prenom']   = 'Mesmae';
    $_SESSION['age']     = 24;
    echo "<hr/>";
    ?>
  </body>
</html>
