 <?php
	include 'Includes\common.php';


	$servername = "localhost";
	$username = "root";
	$password = "vishnu";
	$dbname = "store";
	$email_id=strval($_SESSION['email']);
	
	if ($_POST["password1"] != $_POST["password"])
	{
		header("Location: settings.php?Errorvlu=New Password and Retype are not match");
		exit;
	}
	
	$conn = new mysqli($servername, $username, $password,$dbname );

	if ($result = $conn->query("SELECT * FROM users where email='". $email_id. "' and password='".  $_POST["old-password"]. "'" ));
	{
      	if ($result -> num_rows == 0)
		{
			header("Location: settings.php?Errorvlu=Wrong Old Password entered");
			exit;
		}
	}

	
    $pwd=$_POST["password1"];
    $sql="update users set password='$pwd' where email='$email_id'";
	echo $sql;
	if ($result = $conn->query("SET autocommit = 0;"));

    if ($result = $conn->query($sql));
	if ($result = $conn->query("Commit"));		
	header("Location: settings.php");
	exit;
?>