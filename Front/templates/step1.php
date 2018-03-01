<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Step1</title>
   <link rel="stylesheet" href="../styles/step1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

<nav class="navbar fixed-top navbar-light bg-primary justify-content-between">
  <a class="navbar-header" href="../index.php">
    <img src="../assets/logofacilitemoi.png" width="30%" class="d-inline-block align-top" alt="facilite_moi_logo">
  </a>
  <form class="form-inline">
  <button class="btn btn-outline-light my-2 my-sm-0" href="#"role="button">Sauvegarder</button>
  </form>
</nav>

<nav class="navbar fixed-bottom navbar-default bg-light justify-content-between text-white shadow-depth-3">
  <a href="../index.php">
    <i class="far fa-arrow-alt-circle-left m-3 "style="font-size:30px;"></i>
  </a>
  <div class="progress" style="width: 50%">
    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15min</div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30min</div>
    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">25min</div>
  </div>
  <a href="../##">
  <i class="far fa-arrow-alt-circle-right m-3 "style="font-size:30px;"></i>
  </a>
</nav>


    <main role="main">

      <section class="jumbotron p-3">
        <div class="container">
          <h1 class="jumbotron-heading">Etape 1 - Comprendre</h1>
          <p class="lead text-muted">Ici un texte de description sur Comprendre ! Qu'est ce que c'est, pourquoi faire ?</p>
        </div>
      </section>

      <div class="album py-5">
        <div class="container">
				    <?php 
					                      
				ini_set('display_errors','on');
				error_reporting(E_ALL);
				
					$con=mysqli_connect("localhost","root","root","facilitemoi");
					// Check connection
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }
					  
					$qz = "SELECT * FROM fiches WHERE Section=1";
					$result = mysqli_query($con,$qz);
			
					 ?>
		 

          <div class="row">
            <?php 
	            while($data = mysqli_fetch_array($result)){
		            
		           //shadow-depth-1" 
		          echo '<div class="col-md-4">
              <div class="card mb-4 box-shadow">
              
                <img class="card-img-top" src="../img/fiches.jpg">
                <div class="card-body">
                    <h3>'.$data['Nom'].'</h3>
                    <h4>'.$data['Genre'].'</h4>
                  <p class="card-text">'.$data['Description'].'</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <!-- Button trigger modal -->
                    	<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong'.$data['ID'].'">Voir</button>
                    </div>
                    <!-- Modal -->
						<div class="modal fade" id="exampleModalLong'.$data['ID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">'.$data['Nom'].'</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        '.$data['Content'].'
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
						      </div>
						    </div>
						  </div>
						</div>   

                    <small class="text-muted">'.$data['Temps'].' min</small>
                  </div>
                </div>
              </div>
            </div>
            
            ';  
		            
		            
	            }
	            
            ?>
                  
          </div>

      </div>

    </main>

<?php mysqli_close($con);  ?>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
