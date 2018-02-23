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
	while($data = mysqli_fetch_assoc($result)) {
		echo $data['ID'];
	}
	mysqli_close($con); 
	
	?>