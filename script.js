
// const myData = 'http://data.montpellier3m.fr/sites/default/files/ressources/OSM_Juvignac_parking_point.json'
// let park = fetch(myData)
// .then(response => response.json())
// .then(response => console.log(response.results))
// .catch(error => console.log(error));

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
 