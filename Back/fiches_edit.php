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
	  		

                <h3><span class="title">Edition de la fiche</span><span class="underlined">&nbsp;</span></h3>      
                <div style="margin: auto; padding: inherit;">
	                 <div class="row">
	                <FORM method="get" action="fiches_editdb.php">
		                <input id="ID" name="ID" type="hidden" value="<?php echo $data['ID'];?>">
		                <input id="Section" name="Section" type="hidden" value="<?php echo $data['Section'];?>">
					
	                
	           
  <div class="col-sm-5">Nom : 
	  
	  		<INPUT class="form-control" type="text" name="Nom" value="<?php echo $data['Nom'];?>" size="30"></div>
	  		  <div class="col-sm-1"></div>
  <div class="col-sm-6">Description :
	  		<textarea class="form-control" name="Description" rows="3" cols="20"><?php echo $data['Description'];?></textarea></div>	
</div>
<br>
<div class="row">
	<div class="col-sm-2" style="text-align: center">P1 :
	  		<INPUT type="text" name="P1" value="<?php echo $data['P1'];?>" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P2 :
	  		<INPUT type="text" name="P2" value="<?php echo $data['P2'];?>" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P3 :
	  		<INPUT type="text" name="P3" value="<?php echo $data['P3'];?>" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P4 :
	  		<INPUT type="text" name="P4" value="<?php echo $data['P4'];?>" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P5 :
	  		<INPUT type="text" name="P5" value="<?php echo $data['P5'];?>" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P6 :
	  		<INPUT type="text" name="P6" value="<?php echo $data['P6'];?>" size="3"></div>
</div>               	  		
<br>
	  		Contenu :
	  		<textarea name="Content" class="form-control" rows="10"><?php echo $data['Content'];?></textarea>
	  		<br>
	  		
	  		<div align="right">
	  		<INPUT type="submit" name="nom" value="Envoyer">
	  		</form>
	  			</div>
	  		</div>
             
          
      <!-- end div content inspiration-->