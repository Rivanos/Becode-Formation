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
  // NOTE: function qui va retourner un tableau avec $r[annee][mois][jour] = jour de la semaine.
  function getAll($annee){
    $r = array();
    $date = new DateTime($annee.$mois."-01");
    while ($date -> format ('Y') <= $year ) {
    $y = $date -> format ('Y');
    $m = $date -> format ('n');
    $d = $date -> format ('j');
    $w = str_replace("0","7", $date -> format ('w'));
    $r[$y][$m][$d] = $w;
    strtotime("2011-01-01 + 1 day");
    $date->add(new DateInterval("P1D"));
  }
    return $r;
  }
  $date = new Date();
  $dates = $date->getAll($annee);
  print_r($dates);
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
$days = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche",];
$moisdannée = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
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
        <tr>
          <?php for ($i=0; $i < 7; $i++) { ?>
            <td><?= $jourdelasemaine[$i] ?></td>
        <?php  } ?>
        </tr>
        <tbody>
          <tr>
          <?php foreach ($days as $d=>$w): ?>
              <td><?php $d; ?></td>
              <?php if ($w == 7) {?>
          </tr><tr>
              } ?>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
    <?php } ?>
  </body>
</html>
