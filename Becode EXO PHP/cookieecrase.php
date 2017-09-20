<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="pseudo" value="">
      <input type="text" name="login" value="">
      <input type="submit" name="" value="">
<?php
      if (isset($_POST["pseudo"]) && isset($_POST["login"])) {
        setcookie("loginC", $_POST["login"], time()+1000);
        setcookie("pseudoC", $_POST["pseudo"] , time()+1000);
}?>
    </form>
    <a href="user.php">Link</a>
  </body>
</html>
