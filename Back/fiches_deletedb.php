<?php 
		                      
ini_set('display_errors','on');
error_reporting(E_ALL);

	$con=mysqli_connect("localhost","root","root","facilitemoi");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	$qz = "SELECT * FROM fiches WHERE ID=".$_GET['id']."";
	$result = mysqli_query($con,$qz);
	
$i=1;

// on fait une boucle qui va faire un tour pour chaque enregistrement 
$data = mysqli_fetch_array($result);

mysqli_close($con); 

		 ?>

<!-- content observer -->
      <div id="content">
	  		

                <h3><span class="title">Suppression de la fiche</span><span class="underlined">&nbsp;</span></h3>      
                <div style="margin: auto; padding: inherit;">
	                 <div class="row">
		             <a href="./fiches.php?ref=<?php echo $_GET['Section'];?>"><img src="./img/BT_retour.jpg" width="50" height="50" ></a> 
		       
		                
					
	                
	                
	                <div align="center">
		                <h1><?php echo $data['Nom'];?></h1>
		                <br>
		                <h4><?php echo $data['Description'];?></h4>
		               	<br>
					   	<br>
					   	<h1>Supprimer ?</h1>
		                <br>
		                <form action="./fiches_deletedb1.php" method="get">
							<input id="suppr" type="image" alt="suppr" src="./img/delete-1-icon.png">
							<input id="ID" name="ID" type="hidden" value="<?php echo $data['ID'];?>">
							<input id="Section" name="Section" type="hidden" value="<?php echo $data['Section'];?>">
						</form>

		                					   	
						</div>  
						
	                </div>


	  		</div>
	  		</div>
	  		</div>
             
          
      <!-- end div content inspiration-->