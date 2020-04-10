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
			zoom: 13,
			center: Montpellier
		});

	var marker_Anti = new google.maps.Marker({
		position: {lat: 43.60889, lng:3.88807 },
		map: map,
		title: 'Antigone',
		nomXML:'ANTI'
	});

	var marker_Come = new google.maps.Marker({
		position: {lat: 43.6087, lng:3.88033 },
		map: map,
		title: 'Comedie',
		nomXML:'COME'
	});

	var marker_Coru = new google.maps.Marker({
		position: {lat: 43.61361, lng:3.88188 },
		map: map,
		title: 'Corum',
		nomXML:'CORU'
	});

	var marker_Euro = new google.maps.Marker({
		position: {lat: 43.60803, lng:3.89408 },
		map: map,
		title: 'Europa',
		nomXML:'EURO'
	});

	var marker_Foch = new google.maps.Marker({
		position: {lat: 43.61069, lng:3.87634 },
		map: map,
		title: 'Foch', 
		nomXML:'FOCH'
	});

	var marker_Gamb = new google.maps.Marker({
		position: {lat: 43.60865, lng:3.86753 },
		map: map,
		title: 'Gambetta', 
		nomXML:'GAMB'
	});

	var marker_Gare = new google.maps.Marker({
		position: {lat: 43.60362, lng:3.87899 },
		map: map,
		title: 'Gare', 
		nomXML:'GARE'
	});

	var marker_Tria = new google.maps.Marker({
		position: {lat: 43.60933, lng:3.88201 },
		map: map,
		title: 'Triangle', 
		nomXML:'TRIA'
	});

	// The marker, positioned at Montpellier
	var marker_Arct = new google.maps.Marker({
		position: {lat: 43.61098, lng: 3.87312},
		map: map,
		title: 'Arc de triomphe',
		nomXML: 'ARCT'
	});

	var marker_Pito = new google.maps.Marker({
		position: {lat: 43.61265, lng: 3.8709},
		map: map,
		title: 'Pito',
		nomXML: 'PITO'
	});

	var marker_Circ = new google.maps.Marker({
		position: {lat: 43.60513, lng: 3.91962}, 
		map: map,
		title: 'Circé',
		nomXML: 'CIRC'
	});

	var marker_Sabi = new google.maps.Marker({
		position: {lat: 43.58488, lng: 3.86006},
		map: map,
		title: 'Sabines',
		nomXML: 'SABI'
	});

	var marker_Garc = new google.maps.Marker({
		position: {lat: 43.59051, lng: 3.89097},
		map: map,
		title: 'Garcia Lorca',
		nomXML: 'GARC'
	});

	var marker_Moss = new google.maps.Marker({
		position: {lat: 43.61648, lng: 3.81873},
		map: map,
		title: 'Mosson',
		nomXML: 'MOSS'
	});

	var marker_Medc = new google.maps.Marker({
		position: {lat: 43.63906, lng: 3.82818},
		map: map,
		title: 'Euromédecine',
		nomXML: 'MEDC'
	});

	var marker_Occi = new google.maps.Marker({
		position: {lat: 43.6357, lng: 3.84801},
		map: map,
		title: 'Occitanie',
		nomXML: 'OCCI'
	});

	var marker_Ga109 = new google.maps.Marker({
		position: {lat: 43.60413, lng: 3.91696},  
		map: map,
		title: 'Gaumont OUEST',
		nomXML: 'GA109'
	});

	var marker_Ga250= new google.maps.Marker({
		position: {lat: 43.6044, lng: 3.91428},
		map: map,
		title: 'Gaumont EST',
		nomXML: 'GA250'
	});

	marker_Anti.addListener('click', function() {
		trouverPlacesLibresMap(marker_Anti);
	});

	marker_Come.addListener('click', function() {
		trouverPlacesLibresMap(marker_Come);
	});

	marker_Coru.addListener('click', function() {
		trouverPlacesLibresMap(marker_Coru);
	});

	marker_Euro.addListener('click', function() {
		trouverPlacesLibresMap(marker_Euro);
	});

	marker_Foch.addListener('click', function() {
		trouverPlacesLibresMap(marker_Foch);
	});

	marker_Gamb.addListener('click', function() {
		trouverPlacesLibresMap(marker_Gamb);
	});

	marker_Gare.addListener('click', function() {
		trouverPlacesLibresMap(marker_Gare);
	});

	marker_Tria.addListener('click', function() {
		trouverPlacesLibresMap(marker_Tria);
	});

	marker_Arct.addListener('click', function() {
		trouverPlacesLibresMap(marker_Arct);
	});

	marker_Pito.addListener('click', function() {
		trouverPlacesLibresMap(marker_Pito);
	});

	marker_Circ.addListener('click', function() {
		trouverPlacesLibresMap(marker_Circ);
	});

	marker_Sabi.addListener('click', function() {
		trouverPlacesLibresMap(marker_Sabi);
	});

	marker_Garc.addListener('click', function() {
		trouverPlacesLibresMap(marker_Garc);
	});

	marker_Moss.addListener('click', function() {
		trouverPlacesLibresMap(marker_Moss);
	});

	marker_Medc.addListener('click', function() {
		trouverPlacesLibresMap(marker_Medc);
	});

	marker_Occi.addListener('click', function() {
		trouverPlacesLibresMap(marker_Occi);
	});

	marker_Ga109.addListener('click', function() {
		trouverPlacesLibresMap(marker_Ga109);
	});

	marker_Ga250.addListener('click', function() {
		trouverPlacesLibresMap(marker_Ga250);
	});



}