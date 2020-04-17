
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>FindPark</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 
</head>

<body>
  <nav class="navbar" href="/">
    <h1 class="navbar ml-2">FindPark <p>Montpellier</p></h1>
    
    <div class="d-flex justify-content-end">

      <button class="mr-4 rounded ">
        <a class="nav-link" href="view/inscription.php">S'inscrire</a>
      </button>
      <button class="rounded">
        <a class="nav-link"href="view/connexion.php">Se connecter</a>
      </button>

    </div>
  </nav>
  <div class="btn-group btn-group-toggle w-100 " data-toggle="buttons">
    <label id="color1" class="btn w-50">
      <input type="radio" name="options" id="option1" checked> Arc de Triomphe 
    </label>
    <label id="color" class="btn w-50">
      <input type="radio" name="options" id="option1" > Pitot
    </label>
  </div>
  <div class="btn-group btn-group-toggle w-100 " data-toggle="buttons">
    <label id="color" class="btn w-50 active">
      <input class="button" type="radio" name="options" id="option1" checked> Comédie
    </label>
    <label id="color1" class="btn w-50 ">
      <input type="radio" name="options" id="option1">  Arceaux
    </label>
  </div>
  <div class="btn-group btn-group-toggle w-100 " data-toggle="buttons">
    <label id="color1" class="btn w-50">
      <input type="radio" name="options" id="option1" checked>  Corum
    </label>
    <label id="color" class="btn w-50">
      <input type="radio" name="options" id="option1">  Nombre d'Or
    </label>
  </div>
  <div class="w3-container">
  
    
    <button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3">
    <img src="images/triangle.png"></button>
    
    <div id="Demo1" class="w3-hide ">
      <a class="w3-button btn-group btn-group-toggle w-100 p-0">
        <label id="color" class="btn w-50">
          <input type="radio" name="options" id="option1"> Polygone
        </label>
        <label  id="color1" class="btn w-50">
          <input  type="radio" name="options" id="option1" checked>  Europa
        </label>
       
      </a>
      <a class="w3-button btn-group btn-group-toggle w-100 p-0" >
        <label  id="color1" class="btn w-50">
          <input  type="radio" name="options" id="option1" checked>  Foch Préfecture
        </label>
        <label id="color" class="btn w-50">
          <input type="radio" name="options" id="option1"> Gambetta
        </label>
      </a>
      <a class="w3-button btn-group btn-group-toggle w-100 p-0" > 
        <label id="color" class="btn w-50">
          <input type="radio" name="options" id="option1"> Laissac
        </label>
        <label  id="color1" class="btn w-50">
          <input  type="radio" name="options" id="option1" checked>  Triangle
        </label>
      
      </a>
    
    </div>
    
    </div>
   
  </div>



      <div>
      <iframe src="https://www.google.com/maps/d/embed?mid=1ES6UwanSkPVbl8RD6N6AJCLMIE8" width="100%" height="1590" frameborder="0" style="border:0;" allowfullscreen=""> </iframe>
         
      </div>
      <div class="search"><p>Rechercher</p></div>
      <input class="pt-2 w-100" type="text" placeholder="..">
      <script src="script.js"></script>
      <script src="app.js">
        
      </script>
</body>

</html>