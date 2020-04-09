// const myData = 'http://data.montpellier3m.fr/sites/default/files/ressources/OSM_Juvignac_parking_point.json'
// let park = fetch(myData)
// .then(response => response.json())
// .then(response => console.log(response.results))
// .catch(error => console.log(error));

let groupeBoutons1 = document.getElementById("groupeBoutons");
let groupeBoutons2 = document.getElementById("Demo1");

function myFunction(id) {
	var x = document.getElementById(id);
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}

function trouverPlacesLibres(e) {
	let proxyurl = "https://cors-anywhere.herokuapp.com/";
	let url = "http://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_" + e.target.id + ".xml";
	let urlFinale = proxyurl + url;
	let requeteHTTP = new XMLHttpRequest();
	requeteHTTP.open("GET", urlFinale, false);
	requeteHTTP.setRequestHeader("Conteent-Type", "text/xml");
	requeteHTTP.send(null);
	let reponse = requeteHTTP.responseXML;
	if (reponse === null) {
		alert("Données non disponibles");
	} else {
		let placesDisponibles = reponse.childNodes[0].children[3].textContent.toString();
		/* response.childNodes[0] ---> racine
		.children[3] ---> 4e balise enfant de la racine ---> nombre de places libres
		.textContent.toString() ---> transforme le résultat obtenu en string pour pouvoir l'afficher */
		let message = "Il y a " + placesDisponibles + " places libres dans le parking " + e.target.value + ".";
		alert(message);
	}
}
groupeBoutons1.onclick = trouverPlacesLibres;
groupeBoutons2.onclick = trouverPlacesLibres;

function trouverPlacesLibresMap(marker) {
	let proxyurl = "https://cors-anywhere.herokuapp.com/";
	let url = "http://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_" + marker.nomXML + ".xml";
	let urlFinale = proxyurl + url;
	let requeteHTTP = new XMLHttpRequest();
	requeteHTTP.open("GET", urlFinale, false);
	requeteHTTP.setRequestHeader("Conteent-Type", "text/xml");
	requeteHTTP.send(null);
	let reponse = requeteHTTP.responseXML;
	if (reponse === null) {
		alert("Données non disponibles");
	} else {
		let placesDisponibles = reponse.childNodes[0].children[3].textContent.toString();
		/* response.childNodes[0] ---> racine
		.children[3] ---> 4e balise enfant de la racine ---> nombre de places libres
		.textContent.toString() ---> transforme le résultat obtenu en string pour pouvoir l'afficher */
		let message = "Il y a " + placesDisponibles + " places libres dans le parking " + marker.title + ".";
		alert(message);
	}
}

function initMap() {
	// The location of Montpellier
	var Montpellier = {
		lat: 43.6110887,
		lng: 3.874522
	};
	// The map, centered at Montpellier
	var map = new google.maps.Map(
		document.getElementById('map'), {
			zoom: 12,
			center: Montpellier
		});
	// The marker, positioned at Montpellier
	var marker = new google.maps.Marker({
		position: Montpellier,
		map: map,
		title: 'Arc de triomphe',
		nomXML: 'ARCT'
	});

	marker.addListener('click', function() {
		trouverPlacesLibresMap(marker);
	});
}