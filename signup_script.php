<?php

include 'Includes\common.php';


$servername = "localhost";
$username = "root";
$password = "vishnu";
$dbname = "store";
$conn = new mysqli($servername, $username, $password,$dbname );

$sql ="INSERT INTO users (name,email, password,contact,city,address) VALUES('". $_POST["name"]. "','". $_POST["e-mail"]. "','". $_POST["password"]. "','". $_POST["contact"]. "','". $_POST["city"]. "','". $_POST["address"]. "')"; 
// Create connection
echo $sql;
if ($result = $conn->query($sql))
{
   header("Location: login.php");
   exit;
}
?>