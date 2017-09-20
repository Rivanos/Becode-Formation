<?php

class Form {
  public function create($action){
    return "<form action='$action'>";
  }
  public function text($name, $placeholder){
    return "<input type='text' name='$name' placeholder='$placeholder' />";
  }
  public function submit($value){
    return "<input type='submit' value='$value' />";
  }
  public function end(){
    return "</form>";
  }
}

$action = '#';
$nom = 'Mika';
$prenom = 'Mesmaeker';
$form = new Form();
echo $form->create($action); // créer le début du formulaire
echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire

 ?>
