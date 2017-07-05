<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Exercices</title>
  </head>
  <body>
    <?php
    session_start();
    if (isset($_POST["pseudo"]) && isset($_POST["login"])) {
      setcookie("loginC", $_POST["login"], time()+1000);
      setcookie("pseudoC", $_POST["pseudo"] , time()+1000);
    }
    echo "<h1>Variables</h1>";
        $nom = "Mika";
        echo $nom;

      echo "<hr/>";

        $nom1 = "Mika <br>";
        $prenom = "Mesmaeker <br>";
        $age = 24;
        echo $nom1, $prenom, $age;
        echo "<hr/>";

        $km = "1 <br>" ;
        echo $km;
        $km = "3 <br>";
        echo $km ;
        $km = "125 <br>";
        echo $km ;

        echo "<hr/>";

        $checkbox = true;
        $prix = 4.34;

        echo $checkbox,
         $prix,
          $age,
           $prenom;

        echo "<hr/>";

        $number = "";
        echo $number;
        $number = 23;
        echo $number;

        echo "<hr/>";

        $name = "Mika";
        echo "Bonjour \n", $name ,"\ncomment vous allez?\n";

        echo "<hr/>";

        echo "Bonjour\n", $nom, $prenom, "\ntu as\n", $age, "\nans";

        echo "<hr/>";

        $somme = 2+3;
        $produit = 5*20;
        $division = 45/5;
        echo $somme;
        echo "<br>";
        echo $produit;
        echo "<br>";
        echo $division;

        echo "<hr/>";

    echo "<h1>Conditions</h1>";

        $age = 24;
        if ($age > 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }

        echo "<hr/>";

        $isEasy = true;
        if ($isEasy == true) {
            echo "C'est facile";
        } else {
            echo "C'est difficile";
        }

        echo "<hr/>";

        $age = 24;
        $genre = "homme";
        if ($age > 18) {
            if ($genre == "homme") {
                echo "Vous êtes un homme et majeur";
            } else {
                echo "Vous êtes une femme et majeure";
            }
        } else {
            if ($genre == "homme") {
                echo "Vous êtes un homme et majeur";
            } else {
                echo "Vous êtes une femme et majeure";
            }
        }

        echo "<hr/>";

        $magnitude = 4;

        switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
}

        echo "<hr/>";
        echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        echo "<hr/>";

        $maVariable = "Femme";
        if ($maVariable == "Homme") {
            echo "C'est un développeur";
        } else {
            echo "C'est une développeuse";
        }

        echo "<hr/>";
        $monAge = 24;
        echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
        echo "<hr/>";
        $age = 24;
        if ($age > 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }

        echo "<hr/>";

        $maVariable = false;
        echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
        echo "<hr/>";
        if ($isEasy == true) {
            echo "C'est pas bon";
        } else {
            echo "C'est ok";
        }

        echo "<hr/>";
        $maVariable ="";
        echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
        if ($isEasy == true) {
            echo "C'est pas bon";
        } else {
            echo "C'est ok";
        }
        echo "<hr/>";

    echo "<h1>Les boucles</h1>";

        for ($i=0; $i < 10 ; $i++) {
            echo $i;
            echo "<br>";
        }

        echo "<hr/>";

        $maVariable = 0;
        $mavariable = 5;

        for ($i=0; $i < 21; $i++) {
            echo $maVariable*$mavariable;
            echo "<br>";
            $maVariable++;
        }

        echo "<hr/>";

        $mavariable = 5;

        for ($i=100; $i > 10; $i--) {
            echo $i*$mavariable;
            echo "<br>";
            $maVariable++;
        }

        echo "<hr/>";

        for ($i=1; $i < 11;) {
            echo $i;
            $i=$i + ($i/2);
            echo "<br>";
        }

        echo "<hr/>";

        for ($i=1; $i < 15 ; $i++) {
            echo $i, "On y arrive presque";
            echo "<br>";
        }

        echo "<hr/>";

        for ($i=20; $i > 0 ; $i--) {
            echo $i, "C'est presque bon";
            echo "<br>";
        }

        echo "<hr/>";

        for ($i=1; $i < 100; $i=$i + 15) {
            echo $i, "On tient le bon bout.";
            echo "<br>";
        }

        echo "<hr/>";

        for ($i=200; $i > 0 ; $i = $i - 12) {
            echo $i, "C'est presque bon";
            echo "<br>";
        }

    echo "<h1>Les fonctions</h1>";

        echo "<hr/>";

        function foo()
        {
            echo "Exemple de fonction.\n";
            return true;
        }
        foo();

        echo "<hr/>";

        function fooo($maVariable = "Mika")
        {
            return $maVariable;
        }
        echo fooo();

        echo "<hr/>";

        function fook($maVariable = "Mika", $mavariable = "Mesmaeker")
        {
            return $mavariable." ".$maVariable;
        }

        echo fook();

        echo "<hr/>";

        $age = 24;
        $ages = 34;
        echo $age;
        echo " ";
        echo $ages;
        echo "<br>";

        function fouk($age, $ages)
        {
            if ($age < $ages) {
                return "Le premier nombre est plus petit ";
            } elseif ($age > $ages) {
                return "Le premier nombre est plus grand";
            } elseif ($age == $ages) {
                return "Les deux nombres sont identiques";
            }
        }
        echo fouk($age, $ages);

        echo "<hr/>";

        function fou($age, $nom)
        {
            return $age." ".$nom;
        }
        echo fou($age, $nom);

        echo "<hr/>";

        function four($age, $nom, $prenom)
        {
            return "Bonjour ".$nom." ".$prenom." ,tu as ".$age." "."ans";
        }
        echo four($age, $nom, $prenom);

        echo "<hr/>";

        function personnage($genre, $age)
        {
            if ($age > 18) {
                if ($genre == "homme") {
                    echo "Vous êtes un homme et majeur";
                } else {
                    echo "Vous êtes une femme et majeure";
                }
            } else {
                if ($genre == "homme") {
                    echo "Vous êtes un homme et majeur";
                } else {
                    echo "Vous êtes une femme et majeure";
                }
            }
        }
        echo personnage($genre, $ages);

        echo "<hr/>";

        function somme($nbr, $bnr, $rbn)
        {
            return $nbr+$bnr+$rbn;
        }
        echo somme("3", "somme", true);

    echo "<h1>Les tableaux</h1>";

        $mois = [
        'Janvier',
         'Février',
          'Mars',
           'Avril',
            'Mai',
             'Juin',
              'Juillet',
               'Août',
                'Septembre',
                 'Octobre',
                  'Novembre',
                   'Décembre'
                 ];
        echo $mois[2];
        echo "<hr/>";
        echo $mois[5];
        echo "<hr/>";
        echo $mois[7];
        $mois[7] = "Aout";
        echo $mois[7];

        echo "<hr/>";

        $depFR = [
        "1" => "Ain",
         "3" => "Allier",
          "7" => "Ardèche",
           "15" => "Cantal",
            "26" => "Drome",
             "38" => "Isère",
              "42" => "Loire",
               "43" => "Haute-Loire",
                "63" => "Puy-de-Dôme",
                 "69" => "Rhônes",
                  "73" => "Savoie",
                   "74" => "Haute-Savoie"
                 ];
        echo $depFR[69];

        echo "<hr/>";

        $depFR["57"] = "Moselle";
        echo $depFR[57];

        echo "<hr/>";

        for ($i=0; $i < 13 ; $i++) {
            echo $mois[$i];
            echo "<br>";
        }

        echo "<hr/>";

        foreach ($depFR as $key => $value) {
            echo $value;
            echo "<br>";
        }

        echo "<hr/>";

        foreach ($depFR as $key => $value) {
            echo "Le département ".$value." a le numéro ".$key;
            echo "<br>";
        }


    echo "<h1>Les paramètres d'URL</h1>";


        if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
            echo $_GET["nom"];
            echo $_GET["prenom"];
        } else {
            echo "la balise age n'existe pas :)";
        }
        echo "<hr/>";

        if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
            echo $_GET["dateDebut"];
            echo "<br>";
            echo $_GET["dateFin"];
        } else {
            echo "la balise age n'existe pas :)";
        }

        echo "<hr/>";

        if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
            echo $_GET["langage"];
            echo "<br>";
            echo $_GET["serveur"];
        } else {
            echo "la balise age n'existe pas :)";
        }

        echo "<hr/>";

        if (isset($_GET["semaine"])) {
            echo $_GET["semaine"];
        } else {
            echo "la balise age n'existe pas :)";
        }

        echo "<hr/>";

        if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
            echo $_GET["batiment"];
            echo "<br>";
            echo $_GET["salle"];
        } else {
            echo "la balise age n'existe pas :)";
        }

    echo "<h1>Les formulaires</h1>";

    ?>
      <form class="" action="user.php" method="get">
        <input type="text" name="nom" value="">
        <input type="text" name="prenom" value="">
        <button type="submit" name="button">Clique pour GET</button>
      </form>

<?php
echo "<hr/>";
 ?>
        <form class="" action="user.php" method="post">
          <input type="text" name="nom" value="">
          <input type="text" name="prenom" value="">
          <button type="submit" name="button">Clique pour POST</button>
        </form>

        <form class="" action="user.php" method="post">
          <input type="text" name="nom[]" value="">
          <input type="text" name="nom[]" value="">
          <input type="text" name="nom[]" value="">
          <input type="text" name="prenom" value="">
          <button type="submit" name="button">Clique pour POST</button>
        </form>
        <?php
        $check ="";
                if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["file"])&& isset($_POST["civilite"]) && isset($_POST["button"])) {
                    echo $_POST["civilite"]. "<br>".$_POST["nom"]. "<br>"." ".$_POST["prenom"]. "<br>".$_POST["file"]. "<br>";
                }

                if (!empty($_POST["nom"])) {
                    $check = true;
                } elseif (!empty($_POST["prenom"])) {
                    $check = true;
                } elseif (!empty($_POST["civilite"])) {
                    $check = true;
                }
                if (!empty($_POST["file"])) {
                    $type_file = $_POST['file'];
                    if (strstr($type_file, '.pdf')) {
                        echo "ceci est un pdf";
                    } else {
                        echo "it's not a pdf, reload the page and send me a pdf, Please";
                    }
                }
        echo "<hr/>";
      if ($check == false) {
          echo "<hr/>"; ?>
        <form class="" action="index.php" method="post" required>
        <select class="" name="civilite">
          <option value="">...</option>
          <option value="M">M</option>
          <option value="Mme">Mme</option>
          <option value="Mlle">Mlle</option>
        </select>
        <input type="file" name="file">
        <input type="text" name="nom" value="" required>
        <input type="text" name="prenom" value="" required>
        <button type="submit" name="button" value="envoyer">Clique pour POST</button>
        </form>
    <?php
      }
        echo "<h1>Les sessions</h1>";

        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER["REMOTE_ADDR"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<hr/>";
        ?>
        <a href="user.php">Lien vers une autre page</a>
        <?php


        $_SESSION['nom'] = 'Mika';
        $_SESSION['prenom']   = 'Mesmae';
        $_SESSION['age']     = 24;
        echo "<hr/>";
        ?>
        <form class="" action="" method="post">
          <input type="text" name="pseudo" value="">
          <input type="text" name="login" value="">
          <input type="submit" name="" value="">
        </form>
        <a href="user.php">link</a>

      </body>
</html>
