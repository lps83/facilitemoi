<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

	$mysqli = new mysqli("localhost","root","root","facilitemoi");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


	
	$query = "UPDATE fiches SET Nom = '".$_GET['Nom']."', Description= '".$_GET['Description']."', P1= '".$_GET['P1']."', P2= '".$_GET['P2']."', P3= '".$_GET['P3']."', P4= '".$_GET['P4']."', P5= '".$_GET['P5']."', P6= '".$_GET['P6']."', Content= '".$_GET['Content']."' WHERE ID='".$_GET['ID']."'";

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

}

	?>