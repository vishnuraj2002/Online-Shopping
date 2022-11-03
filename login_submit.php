<?php
include 'Includes\common.php';

	
$servername = "127.0.0.1";
$username = "root";
$password = "vishnu";
$dbname = "store";
$sql ="SELECT * FROM users where email='". $_POST["e-mail"]. "' and password='".  $_POST["password"]. "'" ; 
// Create connection

$conn = new mysqli($servername, $username, $password,$dbname );


if ($result = $conn->query("SELECT * FROM users where email='". $_POST["e-mail"]. "' and password='".  $_POST["password"]. "'" ));
{
  
  if ($result -> num_rows >= 1)
  {
	  $_SESSION['email']=$_POST["e-mail"];
	  while($row = $result->fetch_assoc()) 
	  {
		$_SESSION['id']=$row["id"];
		$_SESSION['user_id']=$row["id"];
		
		header("Location: products.php");
		exit;
	  } 
	  header("Location: products.php");
	  exit;
  }	  
  else
  {
	  header("Location: Login.php?Errorvlu=Wrong Userid/Password entered");
	  exit;
  }	  
  
}

?>