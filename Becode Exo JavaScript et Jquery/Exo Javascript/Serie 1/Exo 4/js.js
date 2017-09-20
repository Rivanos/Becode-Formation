var nom = document.getElementById("nom").value;
var prénom = document.getElementById("prénom").value;
var ville = document.getElementById("ville").value;
document.write(nom);
document.write(prénom);
document.write(ville)
function initElement()
{
  var p = document.getElementById("valider");
  p.onclick = showAlert;
};
function showAlert(nom,prénom,ville){
  alert("Bonjour, ton nom:  "+nom+"\net ton prénom est: "+pnom+"\net tu habites: "+ville+"\n");
}
