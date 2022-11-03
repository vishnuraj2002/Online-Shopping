<?php
session_start();
if (!isset($_SESSION['email'])) 
{ 
	header("Location: index.php");
}
session_destroy();
echo "tst";
header("Location: index.php");

?>
