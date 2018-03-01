<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
   <link rel="stylesheet" href="styles/accueil.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar fixed-top navbar-light bg-primary justify-content-between">
  <a class="navbar-header" href="index.php">
    <img src="assets/logofacilitemoi.png" width="30%" class="d-inline-block align-top" alt="facilite_moi_logo">
  </a>
  <form class="form-inline">
  <a class="btn btn-outline-light my-2 my-sm-0" href="templates/step1.php" role="button">Créer un atelier</a>
  </form>
</nav>

<div class="jumbotron m-0">
  <h1 class="display-4 text-center">Le 1<sup>er</sup>générateur d'atelier de facilitation</h1>
  <p class="lead text-center">Propulsé par le Cyclotron</p>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/Facilitation-graphique.jpg" alt="First slide">
    </div>
  </div>
</div>

<div class="jumbotron text-center m-0">
  <img src="./img/content.gif" alt="" id="uneImage" style="margin-bottom: 10px" />
  <p class="text-center">En quelques cliques, créez votre atelier de facilitation <strong>sur-mesure</strong> en fonction de besoins !</p>
  <p class="lead text-center">
    <a id="boutonstart" class="btn btn-primary btn-lg" role="button">Créer un atelier !</a>
  </p>
</div>

<!--Footer-->
     <footer class="page-footer font-small bg-secondary text-white  pt-5">


         <!--Footer Links-->
         <div class="container mt-5 mb-4 text-center text-md-left ">
             <div class="row mt-3">

                 <!--First column-->
                 <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                     <h6 class="text-uppercase font-weight-bold"><strong>Le Cyclotron</strong></h6>
                     <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                     <p>La direction régionnale Ile-de-France ouest d'Enedis vous présente le Cyclotron.
                     Incubateur intrapreneuriat, accélérateur de projets et d'innovations.</p>
                 </div>

                 <!--Fourth column-->
                 <div class="col-md-4 col-lg-3 col-xl-3">
                     <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                     <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                     <p><i class="fa fa-home mr-3"></i> 54 Quai de Dion Bouton, 92800 Puteaux</p>
                     <p><i class="fa fa-envelope mr-3"></i> cyclotronidf@gmail.com</p>
                     <p><i class="fa fa-phone mr-3"></i> LeNumDeJM</p>
                 </div>
                 <!--/.Fourth column-->

             </div>
         </div>
         <!--/.Footer Links-->

         <!-- Copyright-->
         <div class="footer-copyright py-3 text-center bg-dark">
             <div class="container-fluid">
                 © 2018 CYCLOTRON: <a href="https://cyclotron-idf.fr/"><strong> cyclotron-idf.fr</strong></a>
             </div>
         </div>
         <!--/.Copyright -->

     </footer>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
document.getElementById("boutonstart").addEventListener("mouseover", mouseOver);
document.getElementById("boutonstart").addEventListener("mouseout", mouseOut);
document.getElementById("boutonstart").addEventListener("click", mouseclik);

function mouseOver() {
    document.getElementById("uneImage").src = "./img/happy.gif";
}

function mouseOut() {
    document.getElementById("uneImage").src = "./img/content.gif";
}
function mouseclik() {
    document.getElementById("uneImage").src = "./img/kiss.gif";
    setTimeout(mafonction, 600); 
}

function mafonction() {
    window.location.href='./templates/step1.php';
}



</script>

  </body>
</html>
