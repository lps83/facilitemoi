


<!-- content observer -->
      <div id="content">


                <!-- block example table -->

                <h3><span class="title">Fiches disponible</span><span class="underlined">&nbsp;</span></h3>
                <a class="add" href="#" title="">Ajouter une fiche</a>
                <div class="tablebox">
	                 <table>
                      <thead>
                          <tr>
                      
                            <th>Nom</th>
                            <th>Description</th>
                            <th>P1</th>
                            <th>P2</th>
                            <th>P3</th>
                            <th>P4</th>
                            <th>P5</th>
                            <th>P6</th>

                            <th class="action">Action</th>
                          </tr>
                      </thead>
                      <tbody>
	                      
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
	
$i=1;

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysqli_fetch_array($result))
    { 
	    if($i%2){
		 ?> <tr class="row0">
                            <td><?php echo $data['Nom'];?></td>
                            <td><?php echo $data['Description'];?></td>
                            <td><?php echo $data['P1'];?></td>
                            <td><?php echo $data['P2'];?></td>
                            <td><?php echo $data['P3'];?></td>
                            <td><?php echo $data['P4'];?></td>
                            <td><?php echo $data['P5'];?></td>
                            <td><?php echo $data['P6'];?></td>
                            
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='./fiches.php?ref=edit' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr><?php 
	    }
	    else{
		 
		?><tr class="row1">
                            <td><?php echo $data['Nom'];?></td>
                            <td><?php echo $data['Description'];?></td>
                            <td><?php echo $data['P1'];?></td>
                            <td><?php echo $data['P2'];?></td>
                            <td><?php echo $data['P3'];?></td>
                            <td><?php echo $data['P4'];?></td>
                            <td><?php echo $data['P5'];?></td>
                            <td><?php echo $data['P6'];?></td>
                            
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>                          </tr> <?php  
		  
	    }
	    $i++;

    } 

// on ferme la connexion à mysql 
mysqli_close($con); 
?> 

                      </tbody>
                  </table>
                  <table>

                  </table>
                </div>
                <!-- end block example table -->
                <br />
                <div class="clear"></div>
      </div>
      <!-- end div content observer-->
      
 

                <div class="clear"></div>
      </div>
      <!-- end div content inspiration-->