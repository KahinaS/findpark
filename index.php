<?php 
session_start();
?>

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
		<h1 class="navbar ml-2">FindPark <p>Montpellier</p></h1>

			<div class="search">
				<p>Rechercher</p>
				<input id="searchBar" class="pt-2 w-100" type="text" placeholder="..">
				<!-- <div id="myDropdown" class="dropdown-content">
					<p href="#pbout">pbout</p>
					<p href="#bpse">Bpse</p>
					<p href="#blog">Blog</p>
					<p href="#contpct">Contpct</p>
					<p href="#custom">Custom</p>
					<p href="#support">Support</p>
					<p href="#tools">Tools</p>
				</div> -->
			</div>
			

      <div class="d-flex justify-content-end">
        <?php
        if(isset($_SESSION['id'])){
          echo "Bienvenue" . $_SESSION['pseudo'];
        }else{
          ?>
          <button class="mr-4 rounded ">
          <a class="nav-link" href="view/inscription.php">S'inscrire</a>
        </button>
        <button class="rounded">
          <a class="nav-link"href="view/connexion.php">Se connecter</a>
        </button>
        <?php
        }
        ?>
    </div>
	</nav>

	<div id="groupeBoutons">
		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<button class="btn color1 w-50" id="ARCT">Arc de Triomphe
			</button>
			<button class="btn color w-50" id="PITO">Pitot</button>
		</div>

		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<button class="btn color w-50" id="COME">Comédie</button>
			<button class="btn color1 w-50" id="ANTI">Antigone</button>
		</div>

		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
			<button class="btn color1 w-50" id="CORU">Corum</button>
			<button class="btn color w-50" id="EURO">Europa</button>
		</div>
	</div>

	<div class="w3-container">

		<div id="Demo1" class="w3-hide ">
			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color w-50" id="GARE">Gare</button>
				<button class="btn color1 w-50" id="MOSS">Mosson</button>
			</div>

			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color1 w-50" id="FOCH">Foch Préfecture</button>
				<button class="btn color w-50" id="GAMB">Gambetta</button>
			</div>
			
			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color w-50" id="CIRC">Circé</button>
				<button class="btn color1 w-50" id="TRIA">Triangle</button>
			</div>

			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color1 w-50" id="SABI">Sabines</button>
				<button class="btn color w-50" id="GARC">Garia Lorca</button>
			</div>

			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color w-50" id="MEDC">Europédecine</button>
				<button class="btn color1 w-50" id="OCCI">Occitanie</button>
			</div>

			<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
				<button class="btn color1 w-50" id="GA109">Gaumont Est</button>
				<button class="btn color w-50" id="GA250">Gaumont Ouest</button>
			</div>

		</div>
		<button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3">
			<img id="triangle" src="images/triangle.png"></button>

	</div>

	</div>


	<input id="pac-input" class="controls" type="text" placeholder="Search Box">
	<div id="map"></div>

	<script src="view/script.js"></script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv_PojW_2qKncUAIMj5kJXFEjCd0aIDWM&callback=initMap&libraries=places" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
