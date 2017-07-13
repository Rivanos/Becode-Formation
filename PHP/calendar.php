<?php
$nomDuPremierJourDuMois = "";
  // NOTE:
if (isset($_POST["mois"]) && isset($_POST["annee"])) {
  $mois = $_POST["mois"];
  $annee = $_POST["annee"];
  // NOTE: fonction du calcul du nombre de jour dans le mois choisis par l'utilisateur
  function jour($mois, $annee)
  {
     return cal_days_in_month(CAL_GREGORIAN, intval($mois), intval($annee));
  }
  // NOTE: retourne le nombre de jour dans le mois
  $nbDeJourDansLeMois = jour($mois, $annee);
  // NOTE: retourne le nombre de jour dans le mois + 1
  $nbDeJourDansLeMoisfor = jour($mois, $annee) + 1;
  // NOTE: retourne le nom du mois choisis
  $jd=gregoriantojd($mois ,1, $annee);
  $nbDuMois = jdmonthname($jd , 1);
  // NOTE: retourne le nom du premier jour du mois.
  $nomDuPremierJourDuMois = jddayofweek($jd,1);
  echo $nomDuPremierJourDuMois;
}
else {
  echo "<p>Choisis une date</p>";
}
$jourdelasemaine = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche",];
$moisdannée = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// NOTE: liste des jour du mois si 31 jours dans le mois.

$numerosemaineLun31 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineMar31 = ["",1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineMer31 = ["", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineJeu31 = ["" , "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineVen31 = ["", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineSam31 = ["", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineDim31 = ["", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];

// NOTE: liste des jour du mois si 30 jours dans le mois.

$numerosemaineLun30 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineMar30 = ["",1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineMer30 = ["", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineJeu30 = ["" , "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineVen30 = ["", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineSam30 = ["", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];
$numerosemaineDim30 = ["", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30];

// NOTE: liste des jour du mois si 29 jours dans le mois.

$numerosemaineLun29 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineMar29 = ["",1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineMer29 = ["", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineJeu29 = ["" , "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineVen29 = ["", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineSam29 = ["", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];
$numerosemaineDim29 = ["", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29];

// NOTE: liste des jour du mois si 28 jours dans le mois.

$numerosemaineLun28 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineMar28 = ["",1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineMer28 = ["", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineJeu28 = ["" , "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineVen28 = ["", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineSam28 = ["", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];
$numerosemaineDim28 = ["", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28];


$moisdeLannée = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table, td, tr {
      border: 2px solid black;
      padding: 1em;
      text-align: center;
      }
    </style>
  </head>
  <body>
    <form name="formcalendar" class="" action="calendar.php" method="post">
      <select class="" name="mois">
        <?php
          for ($i=0; $i < 12; $i++) {
            ?>
            <option value="<?= intval($moisdannée[$i]) ?>"><?=$moisdeLannée[$i] ?></option>
          <?php } ?>
      </select>
      <select class="" name="annee">
        <?php
          for ($i=2020; $i >= 2010 ; $i--) {
            ?>
            <option value="<?= intval($i) ?>"> <?=$i ?> </option>
          <?php } ?>
      </select>
      <button type="submit" name="button" value="">Clique pour POST</button>
    </form>
      <?php if (isset($_POST["mois"]) && isset($_POST["annee"])){ ?>
    <table>
      <thead>
        <td colspan="7"> <?= $nbDuMois." ".$annee?></td>
      </thead>
      <tbody>
        <tr>
          <?php for ($i=0; $i < 7; $i++) { ?>
            <td><?= $jourdelasemaine[$i] ?></td>
        <?php  } ?>
        </tr>
        <tr>
        <?php
          switch ($nomDuPremierJourDuMois) {
            case 'Monday':
                if ($nbDeJourDansLeMois == 31) {
                      for ($i=0; $i < 7 ; $i++) {
                        for ($i=0; $i < count($numerosemaineLun31) ; $i++) { ?>
                          <td><?php echo $numerosemaineLun31[$i] ?></td>
                      <?php if ($numerosemaineLun31[$i] % 7 == 0 ) {?>
                      </tr><tr>
                    <?php  }}}
                }
                elseif ($nbDeJourDansLeMois == 30) {
                      for ($i=0; $i < 7 ; $i++) {
                        for ($i=0; $i < count($numerosemaineLun30) ; $i++) { ?>
                          <td><?php echo $numerosemaineLun30[$i] ?></td>
                      <?php if ($numerosemaineLun30[$i] % 7 == 0 ) {?>
                      </tr><tr>
                    <?php  }}}
                }
                elseif ($nbDeJourDansLeMois == 29) {
                      for ($i=0; $i < 7 ; $i++) {
                        for ($i=0; $i < count($numerosemaineLun29) ; $i++) { ?>
                          <td><?php echo $numerosemaineLun29[$i] ?></td>
                      <?php if ($numerosemaineLun29[$i] % 7 == 0 ) {?>
                      </tr><tr>
                    <?php  }}}
                }
                elseif ($nbDeJourDansLeMois == 28) {
                      for ($i=0; $i < 7 ; $i++) {
                        for ($i=0; $i < count($numerosemaineLun28) ; $i++) { ?>
                          <td><?php echo $numerosemaineLun28[$i] ?></td>
                      <?php if ($numerosemaineLun28[$i] % 7 == 0 ) {?>
                      </tr><tr>
                    <?php  }}}
                }
              break;
            case 'Tuesday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMar31) ; $i++) { ?>
                        <td><?php echo $numerosemaineMar31[$i] ?></td>
                    <?php if (( $numerosemaineMar31[$i] + 1) % 7 == 0 && (($numerosemaineMar31[$i] - 1) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMar30) ; $i++) { ?>
                        <td><?php echo $numerosemaineMar30[$i] ?></td>
                    <?php if (( $numerosemaineMar30[$i] + 1) % 7 == 0 && (($numerosemaineMar30[$i] - 1) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMar29) ; $i++) { ?>
                        <td><?php echo $numerosemaineMar29[$i] ?></td>
                    <?php if (( $numerosemaineMar29[$i] + 1) % 7 == 0 && (($numerosemaineMar29[$i] - 1) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMar28) ; $i++) { ?>
                        <td><?php echo $numerosemaineMar28[$i] ?></td>
                    <?php if (( $numerosemaineMar28[$i] + 1) % 7 == 0 && (($numerosemaineMar28[$i] - 1) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            case 'Wednesday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMer31) ; $i++) { ?>
                        <td><?php echo $numerosemaineMer31[$i] ?></td>
                    <?php if (( $numerosemaineMer31[$i] + 2) % 7 == 0) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMer30) ; $i++) { ?>
                        <td><?php echo $numerosemaineMer30[$i] ?></td>
                    <?php if (( $numerosemaineMer30[$i] + 2) % 7 == 0) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMer29) ; $i++) { ?>
                        <td><?php echo $numerosemaineMer29[$i] ?></td>
                    <?php if (( $numerosemaineMer29[$i] + 2) % 7 == 0) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineMer28) ; $i++) { ?>
                        <td><?php echo $numerosemaineMer28[$i] ?></td>
                    <?php if (( $numerosemaineMer28[$i] + 2) % 7 == 0) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            case 'Thursday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineJeu31) ; $i++) { ?>
                        <td><?php echo $numerosemaineJeu31[$i] ?></td>
                    <?php if (( $numerosemaineJeu31[$i] + 3) % 7 == 0 && (($numerosemaineJeu31[$i] + 3) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineJeu30) ; $i++) { ?>
                        <td><?php echo $numerosemaineJeu30[$i] ?></td>
                    <?php if (( $numerosemaineJeu30[$i] + 3) % 7 == 0 && (($numerosemaineJeu30[$i] + 3) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineJeu29) ; $i++) { ?>
                        <td><?php echo $numerosemaineJeu29[$i] ?></td>
                    <?php if (( $numerosemaineJeu29[$i] + 3) % 7 == 0 && (($numerosemaineJeu29[$i] + 3) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineJeu28) ; $i++) { ?>
                        <td><?php echo $numerosemaineJeu28[$i] ?></td>
                    <?php if (( $numerosemaineJeu28[$i] + 3) % 7 == 0 && (($numerosemaineJeu28[$i] + 3) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            case 'Friday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineVen31) ; $i++) { ?>
                        <td><?php echo $numerosemaineVen31[$i] ?></td>
                    <?php if (( $numerosemaineVen31[$i] + 4) % 7 == 0 && (($numerosemaineVen31[$i] + 4) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineVen30) ; $i++) { ?>
                        <td><?php echo $numerosemaineVen30[$i] ?></td>
                    <?php if (( $numerosemaineVen30[$i] + 4) % 7 == 0 && (($numerosemaineVen30[$i] + 4) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineVen29) ; $i++) { ?>
                        <td><?php echo $numerosemaineVen29[$i] ?></td>
                    <?php if (( $numerosemaineVen29[$i] + 4) % 7 == 0 && (($numerosemaineVen29[$i] + 4) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineVen28) ; $i++) { ?>
                        <td><?php echo $numerosemaineVen28[$i] ?></td>
                    <?php if (( $numerosemaineVen28[$i] + 4) % 7 == 0 && (($numerosemaineVen29[$i] + 4) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            case 'Saturday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineSam31) ; $i++) { ?>
                        <td><?php echo $numerosemaineSam31[$i] ?></td>
                    <?php if (( $numerosemaineSam31[$i] + 5) % 7 == 0 && (($numerosemaineSam31[$i] + 5) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineSam30) ; $i++) { ?>
                        <td><?php echo $numerosemaineSam30[$i] ?></td>
                    <?php if (( $numerosemaineSam30[$i] + 5) % 7 == 0 && (($numerosemaineSam30[$i] + 5) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineSam29) ; $i++) { ?>
                        <td><?php echo $numerosemaineSam29[$i] ?></td>
                    <?php if (( $numerosemaineSam29[$i]  + 5) % 7 == 0 && (($numerosemaineSam29[$i] + 5) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineSam28) ; $i++) { ?>
                        <td><?php echo $numerosemaineSam28[$i] ?></td>
                    <?php if (( $numerosemaineSam28[$i] + 5) % 7 == 0 && (($numerosemaineSam28[$i] + 5) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            case 'Sunday':
              if ($nbDeJourDansLeMois == 31) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineDim31) ; $i++) { ?>
                        <td><?php echo $numerosemaineDim31[$i] ?></td>
                    <?php if (( $numerosemaineDim31[$i] + 6) % 7 == 0 && (($numerosemaineDim31[$i] + 6) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 30) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineDim30) ; $i++) { ?>
                        <td><?php echo $numerosemaineDim30[$i] ?></td>
                    <?php if (( $numerosemaineDim30[$i] + 6) % 7 == 0 && (($numerosemaineDim30[$i] + 6) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 29) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineDim29) ; $i++) { ?>
                        <td><?php echo $numerosemaineDim29[$i] ?></td>
                    <?php if (( $numerosemaineDim29[$i] + 6) % 7 == 0 && (($numerosemaineDim29[$i] + 6) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
              elseif ($nbDeJourDansLeMois == 28) {
                    for ($i=0; $i < 7 ; $i++) {
                      for ($i=0; $i < count($numerosemaineDim28) ; $i++) { ?>
                        <td><?php echo $numerosemaineDim28[$i] ?></td>
                    <?php if (( $numerosemaineDim28[$i] + 6) % 7 == 0 && (($numerosemaineDim28[$i] + 6) != 0)) {?>
                    </tr><tr>
                  <?php  }}}
              }
                break;
            default:
              echo "Veuillez réayssez s'il vous plait.";
              break;
          }
          ?>
      </tbody>
    </table>
    <?php } ?>
  </body>
</html>
