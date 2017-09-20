
    <?php include("header.php") ?>
    <?php
      if(isset($_GET["animal"])){
        $animal = $_GET['animal'];
        $animals = $animal.".php";
        include("$animals");
      }
      else {
        include("body.php");
      }

          ?>

    <?php include("footer.php") ?>
