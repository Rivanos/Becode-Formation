<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Sushi house</title>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="Images/Logo.png" alt="Logo Resto Party" height="30px">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="photo.html">Photos</a></li>
          <li><a href="carte.html">Itinéraire</a></li>
          <li class="active"><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron text-left fond">
    <h1>Sushi house</h1>
    <p>Le sushi sous toutes ses formes</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="formulaire" action="#" method="post">

          <label for="name">Nom:</label>
          <input type="text" id="name" >

          <label for="prénom">Prénom:</label>
          <input type="text" id="prénom">

          <label for="message">Message :</label>
          <textarea id="message"></textarea>

          <select class="plainte" name="select" onchange="updated(this)">
            <option value="Dites moi l'objet de votre plainte">Objet de la plainte....</option>
            <option value="Il est pas frai mon poisson?" >Poisson pas frais</option>
            <option class="disable">Trop d'arretes</option>
            <option value="4">Pk des rouleaux de printemps</option>
          </select>

<?php
function updated(element)
{
    var idx=element.selectedIndex;
    var val=element.options[idx].value;
    var content=element.options[idx].innerHTML;
    alert(val + " " + content);
 }
?>
          <button type="button" name="button">Envoyé</button>

          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
