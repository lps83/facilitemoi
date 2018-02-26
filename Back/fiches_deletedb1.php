<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

	$mysqli = new mysqli("localhost","root","root","facilitemoi");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


	
	$query = "DELETE FROM fiches WHERE ID='".$_GET['ID']."'";

	$mysqli->query($query);
	//echo $query;
	mysqli_close($mysqli); 
	  

  switch($_GET['Section']){
	  case 1:
	  header('Location: ./fiches.php?ref=comp');
	  exit();
	  break;
	  case 2:
	  header('Location: ./fiches.php?ref=obs');
	  exit();
	  break;
	  case 3:
	  header('Location: ./fiches.php?ref=insp');
	  exit();
	  break;
	  case 4:
	  header('Location: ./fiches.php?ref=idea');
	  exit();
	  break;
	  case 5:
	  header('Location: ./fiches.php?ref=prot');
	  exit();
	  break;
	  case 6:
	  header('Location: ./fiches.php?ref=test');
	  exit();
	  break;

}

	?>