<?php
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
  $nbDuMois = jdmonthname($mois , CAL_GREGORIAN);
  // NOTE: retourne le nom du premier jour du mois.
  $jd=gregoriantojd($mois ,1, $annee);
  $nomDuPremierJourDuMois = jddayofweek($jd,1);
  echo $nomDuPremierJourDuMois;
  // NOTE: retourne le nombre de jour divisé par 7
  $nbDe7 = floor($nbDeJourDansLeMois/7)+1;
}
else {
  echo "<p>Choisis une date</p>";
}
$Monday = "Monday";
$Tuesday = "Tuesday";
$Wednesday = "Wednesday";
$Thursday = "Thursday";
$Friday = "Friday";
$Saturday = "Saturday";
$Sunday = "Sunday";
$jourdelasemaine = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche",];
$numerosemaine = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$numerosemaineLun = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineMar = ["",1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineMer = ["", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineJeu = ["" , "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineVen = ["", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineSam = ["", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$numerosemaineDim = ["", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,  25, 26, 27, 28, 29, 30, 31];
$moisdeLannée = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre',   'Octobre','Novembre','Décembre'];

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

              break;
            case 'Tuesday':

              break;
            case 'Wednesday':
                  for ($i=0; $i < $nbDeJourDansLeMois ; $i++) { ?>
                    <td><?= $numerosemaineMer[$i] ?></td>
                  <?php }
              break;
            case 'Thursday':

              break;
            case 'Friday':

              break;
            case 'Saturday':

              break;
            case 'Sunday':

              break;
            default:

              break;
          }
          ?>
        </tr>
      </tbody>
    </table>
  </body>
</html>
