 <?php
	include 'Includes\common.php';


	$servername = "localhost";
	$username = "root";
	$password = "vishnu";
	$dbname = "store";
	$user_id=strval($_SESSION['id']);
	$item_id=strval($_GET['id']);
	
	$sql ="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')" ; 
	

	$conn = new mysqli($servername, $username, $password,$dbname );
	if ($result = $conn->query("SET autocommit = 0;"));
	if ($result = $conn->query($sql));
	if ($result = $conn->query("Commit"));
	header("Location: products.php");
	exit;
?>
