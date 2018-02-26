<?php
					
if(isset($_GET['ref'])){
	
	
	
	
	ini_set('display_errors','on');
error_reporting(E_ALL);

	$mysqli = new mysqli("localhost","root","root","facilitemoi");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  

	$query = "INSERT INTO `fiches` (`ID`, `Nom`, `Section`, `Description`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `Content`) VALUES (NULL, NULL,".$_GET['type'].", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
	$mysqli->query($query);

	$id = $mysqli->insert_id;
	
	mysqli_close($mysqli); 
}
	
	
	?>
	
	<!-- content observer -->
      <div id="content">
	  		

                <h3><span class="title">Edition de la fiche</span><span class="underlined">&nbsp;</span></h3>      
                <div style="margin: auto; padding: inherit;">
	                <div class="row">
	                <FORM method="get" action="./fiches_editdb.php">
		                
					<input type="hidden" name="ID" value="<?php echo $id;?>" />
	                <input type="hidden" name="Section" value="<?php echo $_GET['type'];?>" />
	            

  <div class="col-sm-5">Nom : 
	  
	  		<INPUT class="form-control" type="text" name="Nom" value="" size="30"></div>
	  		  <div class="col-sm-1"></div>
  <div class="col-sm-6">Description :
	  		<textarea class="form-control" name="Description" rows="3" cols="20"></textarea></div>	
</div>
<br>
<div class="row">
	<div class="col-sm-2" style="text-align: center">P1 :
	  		<INPUT type="text" name="P1" value="" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P2 :
	  		<INPUT type="text" name="P2" value="" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P3 :
	  		<INPUT type="text" name="P3" value="" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P4 :
	  		<INPUT type="text" name="P4" value="" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P5 :
	  		<INPUT type="text" name="P5" value="" size="3"></div>
	<div class="col-sm-2" style="text-align: center">P6 :
	  		<INPUT type="text" name="P6" value="" size="3"></div>
</div>               	  		
<br>
	  		Contenu :
	  		<textarea name="Content" class="form-control" rows="10"></textarea>
	  		<br>
	  		
	  		<div align="right">
	  		<INPUT type="submit" value="Envoyer">
	  		
	  		
	  			</div>
	  			</form>
	  		</div>
             
          
      <!-- end div content inspiration-->
      
      