<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">

	<title>FindPark</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body id="main">
	<nav class="navbar">
		<h1 class="navbar ml-2">FindPark <p>Montpellier</p>
			</h1>

			<div class="search">
				<p>Rechercher</p>
				<input class="pt-2 w-100" type="text" placeholder="..">
			</div>
			

			<div class="d-flex justify-content-end">

				<button class="mr-4 rounded ">
					<a class="nav-link">sign in</a>
				</button>
				<button class="rounded">
					<a class="nav-link">sign up</a>
				</button>

			</div>
	</nav>

	<div id="groupeBoutons">
		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<!-- <label id="color1" class="btn w-50">
				<input type="radio" name="options" id="option1" checked> Arc de Triomphe
			</label>
			<label id="color" class="btn w-50">
				<input type="radio" name="options" id="option1"> Pitot
			</label> -->
			<button class="btn color1 w-50" id="ARCT">Arc de Triomphe
			</button>
			<button class="btn color w-50" id="PITO">Pitot</button>
		</div>

		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<!-- <label id="color" class="btn w-50 active">
				<input class="button" type="radio" name="options" id="option1" checked> Comédie
			</label>
			<label id="color1" class="btn w-50 ">
				<input type="radio" name="options" id="option1"> Arceaux
			</label> -->
			<button class="btn color w-50" id="COME">Comédie</button>
			<button class="btn color1 w-50" id="arceaux">Arceaux (non disponible)</button> <!-- c'est le parking pitot ? -->
		</div>

		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<!-- <label id="color1" class="btn w-50">
				<input type="radio" name="options" id="option1" checked> Corum
			</label>
			<label id="color" class="btn w-50">
				<input type="radio" name="options" id="option1"> Nombre d'Or
			</label> -->
			<button class="btn color1 w-50" id="CORU">Corum</button>
			<button class="btn color w-50" id="or">Nombre d'Or (non disponible)</button> <!-- c'est le parking d'anitgone ? -->
		</div>
	</div>

	<div class="w3-container">

		<div id="Demo1" class="w3-hide ">
			<!-- <a class="w3-button btn-group btn-group-toggle w-100 p-0">
				<label id="color" class="btn w-50">
					<input type="radio" name="options" id="option1"> Polygone
				</label>
				<label id="color1" class="btn w-50">
					<input type="radio" name="options" id="option1" checked> Europa
				</label>

			</a> -->
			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color w-50" id="polygone">Polygone (non disponible)</button> <!-- Parking privé (non TAM) -->
				<button class="btn color1 w-50" id="EURO">Europa</button>
			</div>
			<!-- <a class="w3-button btn-group btn-group-toggle w-100 p-0">
				<label id="color1" class="btn w-50">
					<input type="radio" name="options" id="option1" checked> Foch Préfecture
				</label>
				<label id="color" class="btn w-50">
					<input type="radio" name="options" id="option1"> Gambetta
				</label>
			</a> -->
			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color1 w-50" id="FOCH">Foch Préfecture</button>
				<button class="btn color w-50" id="GAMB">Gambetta</button>
			</div>
			<!-- <a class="w3-button btn-group btn-group-toggle w-100 p-0">
				<label id="color" class="btn w-50">
					<input type="radio" name="options" id="option1"> Laissac
				</label>
				<label id="color1" class="btn w-50">
					<input type="radio" name="options" id="option1" checked> Triangle
				</label>

			</a> -->
			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color w-50" id="laissac">Laissac (fermé)</button>
				<button class="btn color1 w-50" id="TRIA">Triangle</button>
			</div>

		</div>
		<button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3">
			<img src="images/triangle.png"></button>

	</div>

	</div>



	<div id="map"></div>

	<script src="script.js"></script>
	<script src="app.js">

	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv_PojW_2qKncUAIMj5kJXFEjCd0aIDWM&callback=initMap" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
