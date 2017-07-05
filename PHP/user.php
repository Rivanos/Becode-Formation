<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
          echo $_GET["nom"]." ".$_GET["prenom"];
      }
      if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
          echo $_POST["nom"]." ".$_POST["prenom"];
          print_r($_POST);
      }
      echo "<hr/>";
      session_start();
      echo $_SESSION["nom"];
      echo $_SESSION["prenom"];
      echo $_SESSION["age"];
      echo "<hr/>";

      echo $_COOKIE['loginC'];
      echo "<br>";
      echo $_COOKIE['pseudoC'];
     ?>
  </body>
</html>
