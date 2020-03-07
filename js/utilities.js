
//script qui permet de récupérer la valeur d'un input[type=range] et de l'afficher
var slider = document.getElementById('budget');
var valRange = document.getElementById('valueRange');
valueRange.innerHTML = slider.value;
slider.oninput = function() {
  valRange.innerHTML = this.value;
}

//script de la date et l'heure page customerProfile
function date() {
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  //tableau des mois en francais
  var months = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
  var jour = date.getDate();
  var day = date.getDay();
  //En anglais la semaine commence par un dimanche
  var days = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
  var heure = date.getHours();
  var minutes = date.getMinutes();
  var secondes = date.getSeconds();

  //Ajout de chiffre "0" à chaque fois que l'heure, les minutes ou les secondes sont inferieur au chiffre "10" 
  if (heure < 10) {
    heure = '0' + heure.toString();
  }
  if (minutes < 10) {
    minutes = '0' + minutes.toString();
  }
  if (secondes < 10) {
    secondes = '0' + secondes.toString();
  }
    
  var result= days[day]+' '+jour+' '+months[month]+' '+year;
  var result1 = heure+':'+minutes+':'+secondes;
  //Affichage de la date
  document.getElementById("currentDate").innerHTML = result;
  //Affichage de l'heure
  document.getElementById("currentHour").innerHTML = result1;
  }
  function displayDate() {
    date();
  //mise à jour de l'heure toutes les secondes
    setInterval('date()', 1000);   
}



