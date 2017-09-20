<?php

  try
{
    $pdo = new PDO('mysql:host=localhost;dbname=Student', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 ?>
