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
	  		

                <h3><span class="title">Visualisation de la fiche</span><span class="underlined">&nbsp;</span></h3>      
                <div style="margin: auto; padding: inherit;">
	                 <div class="row">
		             <a href="./fiches.php?ref=<?php echo $_GET['Section'];?>"><img src="./img/BT_retour.jpg" width="50" height="50" ></a> 
		       
		                <input id="ID" name="ID" type="hidden" value="<?php echo $data['ID'];?>">
		                <input id="Section" name="Section" type="hidden" value="<?php echo $data['Section'];?>">
					
	                
	                
	                <div align="center">
		                <h1><?php echo $data['Nom'];?></h1>
		                <br>
		                <h4><?php echo $data['Description'];?></h4>
		               	<br>
		               	
					   	<div class="row">
					   	<div class="col-sm-2" style="text-align: center">P1 : <?php echo $data['P1'];?></div>
						<div class="col-sm-2" style="text-align: center">P2 : <?php echo $data['P2'];?></div>
						<div class="col-sm-2" style="text-align: center">P3 : <?php echo $data['P3'];?></div>
						<div class="col-sm-2" style="text-align: center">P4 : <?php echo $data['P4'];?></div>
						<div class="col-sm-2" style="text-align: center">P5 : <?php echo $data['P5'];?></div>
						<div class="col-sm-2" style="text-align: center">P6 : <?php echo $data['P6'];?></div>
						</div>  
						
	                </div>

	  		<br>
	  		<?php echo $data['Content'];?>
	  		<br>

	  		</div>
	  		</div>
	  		</div>
             
          
      <!-- end div content inspiration-->