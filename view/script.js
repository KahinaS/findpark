
let groupeBoutons1 = document.getElementById("groupeBoutons");
let groupeBoutons2 = document.getElementById("Demo1");
var triangle = 1;


function myFunction(id) {
	var t = document.getElementById("triangle");
	var x = document.getElementById(id);
	
	if (triangle === 1){
		t.setAttribute("src", "images/triangle2.png");
		triangle = 2;
	} else {
		t.setAttribute("src", "images/triangle.png");
		triangle = 1;
	}
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}

// function trouverPlacesLibres(e) {
// 	let proxyurl = "https://cors-anywhere.herokuapp.com/";
// 	let url = "http://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_" + e.target.id + ".xml";
// 	let urlFinale = proxyurl + url;
// 	let requeteHTTP = new XMLHttpRequest();
// 	requeteHTTP.open("GET", urlFinale, false);
// 	requeteHTTP.setRequestHeader("Conteent-Type", "text/xml");
// 	requeteHTTP.send(null);
// 	let reponse = requeteHTTP.responseXML;
// 	if (reponse === null) {
// 		alert("Données non disponibles");
// 	} else {
// 		let placesDisponibles = reponse.childNodes[0].children[3].textContent.toString();
// 		/* response.childNodes[0] ---> racine
// 		.children[3] ---> 4e balise enfant de la racine ---> nombre de places libres
// 		.textContent.toString() ---> transforme le résultat obtenu en string pour pouvoir l'afficher */
// 		let message = "Il y a " + placesDisponibles + " places libres dans le parking " + e.target.value + ".";
// 		alert(message);
// 	}
// }
// groupeBoutons1.onclick = trouverPlacesLibres;
// groupeBoutons2.onclick = trouverPlacesLibres;

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
		// alert("Données non disponibles");
	} else {
		let placesDisponibles = reponse.childNodes[0].children[3].textContent.toString();
		/* response.childNodes[0] ---> racine
		.children[3] ---> 4e balise enfant de la racine ---> nombre de places libres
		.textContent.toString() ---> transforme le résultat obtenu en string pour pouvoir l'afficher */
		let message = "Il y a " + placesDisponibles + " places libres dans le parking " + marker.title + ".";
		return message;
	}
}

var map;
let markersTab = [];

function initMap() {
	// The location of Montpellier
	var Montpellier = {
		lat: 43.6110887,
		lng: 3.874522
	};
	// The map, centered at Montpellier
	map = new google.maps.Map(
	document.getElementById('map'), {
		zoom: 13,
		center: Montpellier
	});
	
	let icons = 'images/pinParkP2.png';

	var trafficLayer = new google.maps.TrafficLayer();
	trafficLayer.setMap(map);

	var marker_Anti = new google.maps.Marker({
		position: {lat: 43.60889, lng:3.88807 },
		map: map,
		title: 'Antigone',
		nomXML:'ANTI',
		type: 'parking',
		icon: icons
	});
	markersTab.push(marker_Anti);
	var infowindowAnti = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Anti)
	});

	var marker_Come = new google.maps.Marker({
		position: {lat: 43.6087, lng:3.88033 },
		map: map,
		title: 'Comedie',
		nomXML:'COME',
		icon: icons
	});
	markersTab.push(marker_Come);
	var infowindowCome = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Come)
	});

	var marker_Coru = new google.maps.Marker({
		position: {lat: 43.61361, lng:3.88188 },
		map: map,
		title: 'Corum',
		nomXML:'CORU',
		icon: icons
	});
	markersTab.push(marker_Coru);
	var infowindowCoru = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Coru)
	});

	var marker_Euro = new google.maps.Marker({
		position: {lat: 43.60803, lng:3.89408 },
		map: map,
		title: 'Europa',
		nomXML:'EURO',
		icon: icons
	});
	markersTab.push(marker_Euro);
	var infowindowEuro = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Euro)
	});

	var marker_Foch = new google.maps.Marker({
		position: {lat: 43.61069, lng:3.87634 },
		map: map,
		title: 'Foch', 
		nomXML:'FOCH',
		icon: icons
	});
	markersTab.push(marker_Foch);
	var infowindowFoch = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Foch)
	});

	var marker_Gamb = new google.maps.Marker({
		position: {lat: 43.60865, lng:3.86753 },
		map: map,
		title: 'Gambetta', 
		nomXML:'GAMB',
		icon: icons
	});
	markersTab.push(marker_Gamb);
	var infowindowGamb = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Gamb)
	});

	var marker_Gare = new google.maps.Marker({
		position: {lat: 43.60362, lng:3.87899 },
		map: map,
		title: 'Gare', 
		nomXML:'GARE',
		icon: icons
	});
	markersTab.push(marker_Gare);
	var infowindowGare = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Gare)
	});

	var marker_Tria = new google.maps.Marker({
		position: {lat: 43.60933, lng:3.88201 },
		map: map,
		title: 'Triangle', 
		nomXML:'TRIA',
		icon: icons
	});
	markersTab.push(marker_Tria);
	var infowindowTria = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Tria)
	});

	var marker_Arct = new google.maps.Marker({
		position: {lat: 43.61098, lng: 3.87312},
		map: map,
		title: 'Arc de triomphe',
		nomXML: 'ARCT',
		icon: icons
	});
	markersTab.push(marker_Arct);
	var infowindowArct = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Arct)
	});

	var marker_Pito = new google.maps.Marker({
		position: {lat: 43.61265, lng: 3.8709},
		map: map,
		title: 'Pito',
		nomXML: 'PITO',
		icon: icons
	});
	markersTab.push(marker_Pito);
	var infowindowPito = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Pito)
	});

	var marker_Circ = new google.maps.Marker({
		position: {lat: 43.60513, lng: 3.91962}, 
		map: map,
		title: 'Circé',
		nomXML: 'CIRC',
		icon: icons
	});
	markersTab.push(marker_Circ);
	var infowindowCirc = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Circ)
	});

	var marker_Sabi = new google.maps.Marker({
		position: {lat: 43.58488, lng: 3.86006},
		map: map,
		title: 'Sabines',
		nomXML: 'SABI',
		icon: icons
	});
	markersTab.push(marker_Sabi);
	var infowindowSabi = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Sabi)
	});

	var marker_Garc = new google.maps.Marker({
		position: {lat: 43.59051, lng: 3.89097},
		map: map,
		title: 'Garcia Lorca',
		nomXML: 'GARC',
		icon: icons
	});
	markersTab.push(marker_Garc);
	var infowindowGarc = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Garc)
	});

	var marker_Moss = new google.maps.Marker({
		position: {lat: 43.61648, lng: 3.81873},
		map: map,
		title: 'Mosson',
		nomXML: 'MOSS',
		icon: icons
	});
	markersTab.push(marker_Moss);
	var infowindowMoss = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Moss)
	});

	var marker_Medc = new google.maps.Marker({
		position: {lat: 43.63906, lng: 3.82818},
		map: map,
		title: 'Euromédecine',
		nomXML: 'MEDC',
		icon: icons
	});
	markersTab.push(marker_Medc);
	var infowindowMedc = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Medc)
	});

	var marker_Occi = new google.maps.Marker({
		position: {lat: 43.6357, lng: 3.84801},
		map: map,
		title: 'Occitanie',
		nomXML: 'OCCI',
		icon: icons
	});
	markersTab.push(marker_Occi);
	var infowindowOcci = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Occi)
	});

	var marker_Ga109 = new google.maps.Marker({
		position: {lat: 43.60413, lng: 3.91696},  
		map: map,
		title: 'Gaumont OUEST',
		nomXML: 'GA109',
		icon: icons
	});
	markersTab.push(marker_Ga109);
	var infowindowGa109 = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Ga109)
	});

	var marker_Ga250= new google.maps.Marker({
		position: {lat: 43.6044, lng: 3.91428},
		map: map,
		title: 'Gaumont EST',
		nomXML: 'GA250',
		icon: icons
	});
	markersTab.push(marker_Ga250);
	var infowindowGa250 = new google.maps.InfoWindow({
		content: trouverPlacesLibresMap(marker_Ga250)
	});

	
	marker_Anti.addListener('click', function() {
		infowindowAnti.open(map, marker_Anti);
	});

	marker_Come.addListener('click', function() {
		infowindowCome.open(map, marker_Come);
	});

	marker_Coru.addListener('click', function() {
		infowindowCoru.open(map, marker_Coru);
	});

	marker_Euro.addListener('click', function() {
		infowindowEuro.open(map, marker_Euro);
	});

	marker_Foch.addListener('click', function() {
		infowindowFoch.open(map, marker_Foch);
	});

	marker_Gamb.addListener('click', function() {
		infowindowGamb.open(map, marker_Gamb);
	});

	marker_Gare.addListener('click', function() {
		infowindowGare.open(map, marker_Gare);
	});

	marker_Tria.addListener('click', function() {
		infowindowTria.open(map, marker_Tria);
	});

	marker_Arct.addListener('click', function() {
		infowindowArct.open(map, marker_Arct);
	});

	marker_Pito.addListener('click', function() {
		infowindowPito.open(map, marker_Pito);
	});

	marker_Circ.addListener('click', function() {
		infowindowCirc.open(map, marker_Circ);
	});

	marker_Sabi.addListener('click', function() {
		infowindowSabi.open(map, marker_Sabi);
	});

	marker_Garc.addListener('click', function() {
		infowindowGarc.open(map, marker_Garc);
	});

	marker_Moss.addListener('click', function() {
		infowindowMoss.open(map, marker_Moss);
	});

	marker_Medc.addListener('click', function() {
		infowindowMedc.open(map, marker_Medc);
	});

	marker_Occi.addListener('click', function() {
		infowindowOcci.open(map, marker_Occi);
	});

	marker_Ga109.addListener('click', function() {
		infowindowGa109.open(map, marker_Ga109);
	});

	marker_Ga250.addListener('click', function() {
		infowindowGa250.open(map, marker_Ga250);
	});

	// var bikeLayer = new google.maps.BicyclingLayer();
	// bikeLayer.setMap(map);
	  
	// Create the search box and link it to the UI element.
	// var input = document.getElementById('pac-input');
	// var searchBox = new google.maps.places.SearchBox(input);
	// map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

	// map.addListener('bounds_changed', function() {
	// 	searchBox.setBounds(map.getBounds());
	// });

	// // Bias the SearchBox results towards current map's viewport.
	// map.addListener('bounds_changed', function() {
	// 	searchBox.setBounds(map.getBounds());
	//   });

	//   var markers = [];
	//   // Listen for the event fired when the user selects a prediction and retrieve
	//   // more details for that place.
	//   searchBox.addListener('places_changed', function() {
	// 	var places = searchBox.getPlaces();

	// 	if (places.length == 0) {
	// 	  return;
	// 	}

	// 	// Clear out the old markers.
	// 	markers.forEach(function(marker) {
	// 	  marker.setMap(null);
	// 	});
	// 	markers = [];

	// 	// For each place, get the icon, name and location.
	// 	var bounds = new google.maps.LatLngBounds();
	// 	places.forEach(function(place) {
	// 	  if (!place.geometry) {
	// 		console.log("Returned place contains no geometry");
	// 		return;
	// 	  }
	// 	  var icon = {
	// 		url: place.icon,
	// 		size: new google.maps.Size(71, 71),
	// 		origin: new google.maps.Point(0, 0),
	// 		anchor: new google.maps.Point(17, 34),
	// 		scaledSize: new google.maps.Size(25, 25)
	// 	  };

	// 	  // Create a marker for each place.
	// 	  markers.push(new google.maps.Marker({
	// 		map: map,
	// 		icon: icon,
	// 		title: place.name,
	// 		position: place.geometry.location
	// 	  }));

	// 	  if (place.geometry.viewport) {
	// 		// Only geocodes have viewport.
	// 		bounds.union(place.geometry.viewport);
	// 	  } else {
	// 		bounds.extend(place.geometry.location);
	// 	  }
	// 	});
	// 	map.fitBounds(bounds);
	// });
}

function zoomSurPoint(e) {
	for(let i = 0; i < markersTab.length; i++) {
		if(e.target.id == markersTab[i].nomXML) {
			map.setZoom(18);
			map.setCenter(markersTab[i].getPosition());
		}
	}
}
groupeBoutons1.onclick = zoomSurPoint;
groupeBoutons2.onclick = zoomSurPoint;

// let searchbar = document.getElementById("searchBar");
// let dropdown = document.getElementById("myDropdown");

// function afficherSousMenu() {
// 	console.log("aaa");
// 	dropdown.style.display = "block";
// }
// searchbar.onclick = afficherSousMenu;
