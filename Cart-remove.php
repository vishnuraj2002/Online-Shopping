 <?php
	include 'Includes\common.php';


	$servername = "localhost";
	$username = "root";
	$password = "vishnu";
	$dbname = "store";
	$user_id=strval($_SESSION['id']);
	$item_id=strval($_GET['id']);
	
	$sql ="Delete from users_items where user_id=$user_id and item_id=$item_id";
	
echo $sql;

	$conn = new mysqli($servername, $username, $password,$dbname );
	if ($result = $conn->query("SET autocommit = 0;"));

    if ($result = $conn->query($sql));
	if ($result = $conn->query("Commit"));		
	header("Location: cart.php");
	exit;
?>