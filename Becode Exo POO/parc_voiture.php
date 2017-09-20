<?php

class Voiture{
  function __construct($kilometrage, $immatriculation, $modele, $marque, $color, $poids, $annee_en_circulation){

    $this->kilometrage = $kilometrage ;
    $this->immatriculation = $immatriculation;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->color = $color;
    $this->poids = $poids;
    $this->annee_en_circulation = $annee_en_circulation;
    $this->utilitaire_commerciale($this->poids);
    $this->origine($this->immatriculation);
    $this->usage($this->kilometrage);
    $this->calc_annee($this->annee_en_circulation);
  }


      public function utilitaire_commerciale($poids){
        if ($poids <= 3500) {
          echo "utilitaire";
        }
        elseif ($poids < 0) {
          echo "cette voiture flotte";
        }
        else {
          echo "commerciale";
        }
      }

      public function origine($immatriculation){
        if (strpos($immatriculation, 'BE') !== false) {
          return 'Belge';
        }
        if (strpos($immatriculation, 'DE') !== false) {
          return 'Allemand';
        }
        if (strpos($immatriculation, 'FR') !== false) {
          return 'Francais';
        }
      }

      public function usage($kilometrage){
        if ($kilometrage <= 100000) {
          return 'low';
        }
        if ($kilometrage >= 200000) {
          return 'middle';
        }
        if ($kilometrage >= 100000) {
          return 'high';
        }
      }

      public function calc_annee(){
        $now = date('y');
        $diff= $now - $this->annee_en_circulation;
        return $diff;
      }
  }

 ?>
