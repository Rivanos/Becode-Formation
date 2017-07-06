<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
setlocale(LC_ALL, "fr_BE.utf8");
     echo date("l");
     echo "<hr>";
     echo date("j-m-y");
     echo "<hr>";
     echo date("j,m,y");
     echo "<hr>";
     echo date("j/m/y");
     echo "<hr>";
     echo strftime("%A %d %B %Y",time());
     echo "<hr>";
     echo time();
     echo "<hr>";
     echo  mktime(15, 0, 0, date("m")  , date("d")-1, date("Y")-1);
     echo "<hr>";
     echo  mktime(0, 0, 0, date("m")-2  , date("d")+14, date("Y")-1);
     $time2 = mktime(0, 0, 0, date("m")-2  , date("d")+10, date("Y")-1);
     echo "<br>";
     $time1 = mktime(15, 0, 0, date("m")  , date("d"), date("Y"));
     echo intval(($time1 - $time2)/(60 * 60 * 24));
     echo "<hr>";
     echo cal_days_in_month(CAL_GREGORIAN, 2, 2017);
     echo "<hr>";
     echo date("j-m-y", mktime(0, 0, 0, 7, 23, 2017));
     echo "<hr>";
     echo date("j-m-y", mktime(0, 0, 0, 7, 3-22, 2017));
     echo "<hr>";
?>
  </body>
</html>
